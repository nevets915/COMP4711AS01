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
                $submitButtonLabel = 'Create new fleet';
            }

            $fields = array(
                'fid'      => form_label('Fleet Id') . form_input('id', $fleet->id),
                'fmanufacturer'  => form_label('Manufacturer') . form_input('manufacturer', $fleet->manufacturer),
                'fmodel'  => form_label('model') . form_input('model', $fleet->model),
                'fseats'  => form_label('seats') . form_input('seats', $fleet->seats),
                'freach'  => form_label('reach') . form_input('reach', $fleet->reach),
                'fcruise'  => form_label('cruise') . form_input('cruise', $fleet->cruise),
                'ftakeoff'  => form_label('takeoff') . form_input('takeoff', $fleet->takeoff),
                'fhourly'  => form_label('hourly') . form_input('hourly', $fleet->hourly),
                'zsubmit'    => form_submit('submit', $submitButtonLabel),
            );
            $this->data = array_merge($this->data, $fields);

            $this->data['pagebody'] = 'fleetedit';
            $this->render();
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
