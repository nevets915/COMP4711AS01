<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * The fleet page should show all the airplanes in your fleet, ordered 
 * reasonably, presented as a grid or table. 
 * 
 * You don't need to show all data for a plane on this page ... 
 * clicking on a plane's identifier should trigger 
 * a separate page with everything you can determine or show for that plane. 
 * This would suit a subcontoller and secondary view for just the one plane.
 *
 * @author namblue
 */
class Fleet extends Application
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
            $this->data['pagebody'] = 'fleet';

            // build the list of authors, to pass on to our view
            $source = $this->fleet_model->all();

            // pass on the data to present, as the "authors" view parameter
            $this->data['fleet'] = $source;

            $this->render();
	}
        
        /*
         * Displays detailed info of the plane selected in a seperate view
         */
        public function show($key)
        {
            // this is the view we want shown
            $this->data['pagebody'] = 'plane';

            // build the list of authors, to pass on to our view
            $source = $this->fleet_model->get($key);

            // pass on the data to present, as the "authors" view parameter
            $this->data = array_merge($this->data, (array) $source);

            $this->render();
        }
        
        // Extract & handle a page of items, defaulting to the beginning
        function page()
        {
            $role = $this->session->userdata('userrole');
            if ($role == ROLE_ADMIN) 
            {
                $this->data['pagination'] = $this->parser->parse('fleetadd',[], true);
            }
            else
            {
                $this->data['pagination'] = "";
            }

        }
        
        public function add()
        {
            $fleet = $this->fleet_model->create();
            $this->session->set_userdata('fleet', $fleet);
            $this->showit();        
        }
        
        public function edit($id = null)
        {
            if ($id == null)
                redirect('/fleet');
            $fleet = $this->tasks->get($id);
            $this->session->set_userdata('fleet', $fleet);
            $this->showit();
        }
           
        private function showit()
        {
            $submitButtonLabel = 'Update fleet';
            $this->load->helper('form');
            $fleet = $this->session->userdata('fleet');
            $this->data['id'] = $fleet->id;

            // if no errors, pass an empty message
            if ( ! isset($this->data['error']))
                $this->data['error'] = '';

            // Check to see if its new or editing
            if (empty($fleet->id))
            {
                $submitButtonLabel = 'Create new plane';
            }

            $fields = array(
                'fmanufacturer'  => form_label('Manufacturer') . form_input('manufacturer', $fleet->Manufacturer),
                'fmodel'  => form_label('Model') . form_input('model', $fleet->Model),
                'fseats'  => form_label('Seats') . form_input('seats', $fleet->Seats),
                'freach'  => form_label('Reach') . form_input('reach', $fleet->Reach),
                'fcruise'  => form_label('Cruise') . form_input('cruise', $fleet->Cruise),
                'ftakeoff'  => form_label('Takeoff') . form_input('takeoff', $fleet->Takeoff),
                'fhourly'  => form_label('Hourly') . form_input('hourly', $fleet->Hourly),
                'zsubmit'    => form_submit('Submit', $submitButtonLabel),
            );
            $this->data = array_merge($this->data, $fields);

            $this->data['pagebody'] = 'fleetedit';
            $this->render();
        }
        
        // handle form submission
        public function submit()
        {
            // setup for validation
            $this->load->library('form_validation');
            $this->form_validation->set_rules($this->fleet_model->rules());

            // retrieve & update data transfer buffer
            $fleet = (array) $this->session->userdata('fleet');
            $fleet = array_merge($fleet, $this->input->post());
            unset($fleet['submit']);
            $fleet = (object) $fleet;  // convert back to object
            $this->session->set_userdata('fleet', (object) $fleet);

            // validate away
            if ($this->form_validation->run())
            {
                if (empty($fleet->id))
                {
                    $fleet->id = $this->fleet_model->highest() + 1;
                    $this->fleet_model->add($fleet);
                    $this->alert('Fleet ' . $fleet->id . ' added', 'success');
                } else
                {
                    $this->fleet_model->update($fleet);
                    $this->alert('Fleet ' . $fleet->id . ' updated', 'success');
                }

                $this->showit();
            }else
            {
                $this->alert('<strong>Validation errors!<strong><br>' . validation_errors(), 'danger');
            }
        }
        
        // build a suitable error mesage
        private function alert($message) {
            $this->load->helper('html');        
            $this->data['error'] = heading($message,3);
        }

        // Forget about this edit
        function cancel() {
            $this->session->unset_userdata('fleet');
            redirect('/fleet');
        }

        // Delete this item altogether
        function delete()
        {
            $dto = $this->session->userdata('fleet');
            $task = $this->tasks->get($dto->id);
            $this->tasks->delete($task->id);
            $this->session->unset_userdata('fleet');
            redirect('/fleet');
        }
}
