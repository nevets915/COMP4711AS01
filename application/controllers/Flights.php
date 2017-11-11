<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Flight
 *
 * @author namblue
 */
class Flights extends Application
{      
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Index for Fleet
	 */
	public function index()
	{
            $role = $this->session->userdata('userrole');
            $this->data['pagetitle'] = 'Viewing as ('. $role . ')';
            $this->page();
            
            // this is the view we want shown
            $this->data['pagebody'] = 'flights';

            // build the list of authors, to pass on to our view
            $source = $this->flights_model->all();

            // pass on the data to present, as the "authors" view parameter
            $this->data['flights'] = $source;

            $this->render();
	}
        
        function page()
        {
            $role = $this->session->userdata('userrole');
            if ($role == ROLE_ADMIN) 
            {
                $this->data['pagination'] = $this->parser->parse('flightadd',[], true);
            }
            else
            {
                $this->data['pagination'] = "";
            }
            
        }
        
        public function add()
        {
            $flight = $this->flights_model->create();
            $this->session->set_userdata('flight', $flight);
            $this->showit();        
        }
        
        public function edit($id = null)
        {
            if ($id == null)
                redirect('/flights');
            $flight = $this->tasks->get($id);
            $this->session->set_userdata('flight', $flight);
            $this->showit();
        }
           
        private function showit()
        {
            $submitButtonLabel = 'Update the flight';
            $this->load->helper('form');
            $flight = $this->session->userdata('flight');
            $this->data['id'] = $flight->id;

            // if no errors, pass an empty message
            if ( ! isset($this->data['error']))
            {
                $this->data['error'] = '';
            }
            
            // Check to see if its new or editing
            if (empty($flight->id))
            {
                $submitButtonLabel = 'Create new flight';
            }

            $fields = array(
                'fdestination'  => form_label('Destination') . form_input('destination', $flight->Destination),
                'farrivalairport'  => form_label('Arrival Airport') . form_input('arrivalairport', $flight->ArrivalAirport),
                'fdeparteairport'  => form_label('Departure Airport') . form_input('departureairport', $flight->DepartureAirport),
                'fplaneid'  => form_label('Plane ID') . form_input('planeid', $flight->PlaneID),
                'fdeparturetime'  => form_label('Departure Time') . form_input('departuretime', $flight->DepartureTime),
                'farrivaltime'  => form_label('Arrival Time') . form_input('arrivaltime', $flight->ArrivalTime),
                'zsubmit'    => form_submit('submit', $submitButtonLabel),
            );
            $this->data = array_merge($this->data, $fields);

            $this->data['pagebody'] = 'flightedit';
            $this->render();
        }
        
        // handle form submission
        public function submit()
        {
            // retrieve & update data transfer buffer
            $flight = (array) $this->session->userdata('flight');
            $flight = array_merge($flight, $this->input->post());
            $flight = (object) $flight;  // convert back to object
            $this->session->set_userdata('flight', (object) $flight);

            if (empty($flight->id))
            {
                $flight->id = $this->flights_model->highest() + 1;
                $this->flights_model->add($flight);
                $this->alert('Flight ' . $flight->id . ' added', 'success');
            } else
            {
                $this->flights_model->update($flight);
                $this->alert('Flight ' . $flight->id . ' updated', 'success');
            }
               
            $this->showit();
        }
        
    
        // build a suitable error mesage
        private function alert($message) {
            $this->load->helper('html');        
            $this->data['error'] = heading($message,3);
        }

        // Forget about this edit
        function cancel() {
            $this->session->unset_userdata('flight');
            redirect('/flights');
        }

        // Delete this item altogether
        function delete()
        {
            $dto = $this->session->userdata('flight');
            $flight = $this->tasks->get($dto->id);
            $this->tasks->delete($flight->id);
            $this->session->unset_userdata('flight');
            redirect('/flights');
        }
        
}