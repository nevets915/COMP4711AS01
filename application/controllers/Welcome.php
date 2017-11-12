<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
        $this->load->model('Flights_model');
	}

	/**
	 * Homepage for our app
	 */
	public function index() {

        $fleet =  $this -> fleet_model -> all();
        $flights =  $this -> flights_model -> all();
        $this -> load -> helper('form');


        // will be replaced with data
        $dropdownTest = array(
        //value       Text
            'YVR'        => 'YVR',
            'YVR1'       => 'YVR1',
            'YVR2'       => 'YVR2',
            'YVR3'        => 'YVR3',
        );

        $shirts_on_sale = array('small', 'large');

        // this is the view we want shown
		$this->data['pagebody'] = 'homepage';
        $this->data['fleet_count'] = count($fleet);
        $this->data['flight_count'] = count($flights);
        $this->data['destinations'] = $this -> showDestinations();
        $this->data['base_airport'] = $this -> showBases();
        $this->data['flight'] = $this -> showFlightTable();


        $this->data['depAirport'] = form_dropdown('depAirport', $this -> showDestinations(), 'YVR',
                                                    'class = input style="width:60%"');
        $this->data['ariAirport'] = form_dropdown('ariAirport', $this -> showDestinations(), 'YVR',
                                                    'class = input style="width:60%"');

        date_default_timezone_set('America/Vancouver');
        $date = date('Y-M-d', time());

        $depDate = array(
            'name' => 'depDate_name',
            'id' => 'depDate_id',
            'placeholder' => $date
        );

        $arrDate = array(
            'name' => 'arrDate_name',
            'id' => 'arrpDate_id',
            'placeholder' => $date
        );

        $this->data['departureDate'] = form_input($depDate);
        $this->data['arrivalDate'] = form_input($arrDate);
        $this->data['bookSubmit'] = form_submit('Book', 'bookSubmit', 'class="btn btn-sm"');
        //        $this->data['dashboard_area'] = $this -> getCountOfFlight();
        $this->render();

	}

    function showDestinations(){

	    $airlines = $this -> wacky -> airlines();

        foreach ($airlines as $airline){

            if($airline['id'] == 'bluebird'){
                $destinations = array(
                    '1' => array('dest' => $airline['dest1']),
                    '2' => array('dest' => $airline['dest2']),
                    '3' => array('dest' => $airline['dest3'])
                );
            }
            }

        return $destinations;
    }


    function showBases(){

        $airlines = $this -> wacky -> airlines();
        foreach ($airlines as $airline){
            if($airline['id'] == 'bluebird'){

                $base = $airline['base'];
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
