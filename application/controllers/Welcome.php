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
            $fleets =  $this -> fleet_model -> all();
            $flights =  $this -> flights_model -> all();
            $airlines = $this -> wacky -> airlines();

            $fleet_count = count($fleets);
            $flight_count = count($flights);

            foreach ($airlines as $airline){
                if($airline['id'] == 'bluebird'){
                    $base = $airline['base'];

                    $destinations = array(
                        '1' => array('dest' => $airline['dest1']),
                        '2' => array('dest' => $airline['dest2']),
                        '3' => array('dest' => $airline['dest3'])
                    );
                }
            }


            // this is the view we want shown
            $this->data['pagebody'] = 'homepage';
            $this->data['fleet_count'] = $fleet_count;
            $this->data['flight_count'] = $flight_count;
            $this->data['destinations'] = $destinations;
            $this->data['base_airport'] = $base;
            //$this->data['dashboard_area'] = $this -> getCountOfFlight();
            $this->render();

	}

    function getCountOfFlight(){
        $count = 0;

	    foreach($this -> flights_model -> all() as $flighgt)
	        $count++;

        return $count;
    }

    function getNumberOfFlightsTotal(){

    }


}
