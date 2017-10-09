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
            // this is the view we want shown
            $this->data['pagebody'] = 'flights';

            // build the list of authors, to pass on to our view
            $source = $this->flights_model->all();

            // pass on the data to present, as the "authors" view parameter
            $this->data['flights'] = $source;

            $this->render();
	}
}