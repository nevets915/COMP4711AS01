<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

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
        $this->load->model('Airline');

        $fleets =  $this -> fleet_model -> all();
        $flights =  $this -> flights_model -> all();
        $airlines = $this -> Airline -> all();

        $fleet_count = count($fleets);
        $flight_count = count($flights);


        foreach ($airlines as $key => $value){
            if($value['id'] == 'bluebird'){
                $base = $value['base'];

                $destinations = array(
                    '1' => array('dest' => $value['dest1']),
                    '2' => array('dest' => $value['dest2']),
                    '3' => array('dest' => $value['dest3'])
                );
            }
        }


		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';
        $this->data['fleet_count'] = $fleet_count;
        $this->data['flight_count'] = $flight_count;
        $this->data['destinations'] = $destinations;
        $this->data['base_airport'] = $base;
//        $this->data['dashboard_area'] = $this -> getCountOfFlight();
        $this->render();

	}

	// dashboard

    function getCountOfFlight(){
        $count = 0;

	    foreach($this -> flights_model -> all() as $flighgt)
	        $count++;

        return $count;
    }

    function getNumberOfFlightsTotal(){

    }


}
