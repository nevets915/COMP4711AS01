<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
        $this->load->model('Airline');
        $this->load->model('Flights_model');
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{

        $fleet =  $this -> fleet_model -> all();
        $flights =  $this -> flights_model -> all();

		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';
        $this->data['fleet_count'] = count($fleet);
        $this->data['flight_count'] = count($flights);
        $this->data['destinations'] = $this -> showDestinations();
        $this->data['base_airport'] = $this -> showBases();
        $this->data['flight'] = $this -> showFlightTable();
//        $this->data['dashboard_area'] = $this -> getCountOfFlight();
        $this->render();

	}

    function showDestinations(){

	    $airlines = $this ->Airline -> all();

        foreach ($airlines as $key => $value){
            if($value['id'] == 'bluebird'){

                $destinations = array(
                    '1' => array('dest' => $value['dest1']),
                    '2' => array('dest' => $value['dest2']),
                    '3' => array('dest' => $value['dest3'])
                );
            }
        }

        return $destinations;
    }


    function showBases(){

        $airlines = $this ->Airline -> all();

        foreach ($airlines as $key => $value){
            if($value['id'] == 'bluebird'){


                $base = $value['base'];
            }
        }

        return $base;
    }

    function showFlightTable(){

        $flights = $this->flights_model->all();

//        foreach ($flights as $flight){
//            $flightsArray[] = $flight;
//        }
//
//        // order them by priority
////        usort($undone, "orderByPriority");


        return $flights;
    }
}
