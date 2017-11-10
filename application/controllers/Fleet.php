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
}
