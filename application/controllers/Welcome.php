<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{

        $fleets =  $this -> fleet_model -> all();
        $flights =  $this -> flights_model -> all();

        $fleet_count = count($fleets);
        $flight_count = count($flights);

		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';
        $this->data['fleet_count'] = $fleet_count;
        $this->data['flight_count'] = $flight_count;
		$this->render();
	}
}
