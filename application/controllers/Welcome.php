<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

    private $departure;
    private $arrival;

	function __construct() {
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

        // this is the view we want shown
		$this->data['pagebody'] = 'homepage';
        $this->data['fleet_count'] = count($fleet);
        $this->data['flight_count'] = count($flights);
        $this->data['destinations'] = $this -> showDestinations();
        $this->data['base_airport'] = $this -> showBases();
        $this->data['flight'] = $this -> showFlightTable();

        $fields = array(
            'fDepAirport'   => form_label('Departure Airport')
                                .form_dropdown('DepartureAirport', $this->flights_model->flightsDepartures()),
            'fArrAirport'   => form_label('Arrival Airport')
                                .form_dropdown('ArrivalAirport', $this->flights_model->flightsArrivals()),
            'fBookSubmit'   => form_submit('submit', 'Search')
        );

        $this -> data = array_merge($this->data, $fields);

// dates
//        date_default_timezone_set('America/Vancouver');
//        $date = date('Y-M-d', time());
//
//        $depDate = array(
//            'name' => 'depDate_name',
//            'id' => 'depDate_id',
//            'placeholder' => $dth
//
//        $arrDate = array(
//            'name' => 'arrDate_name',
//            'id' => 'arrpDate_id',
//            'placeholder' => $date
//        );
//        $this->data['departureDate'] = form_input($depDate);
//        $this->data['arrivalDate'] = form_input($arrDate);


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

    function showValueFromFlights($find){

        $flights = $this -> flights_model ->all();

        $result = array();

        foreach ($flights as $flight){
            array_push($result, $flight[$find]);
        }

        return $result;

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


    function submit(){

        $flights = $this -> flights_model -> all();

        $departure = $this->input->post('DepartureAirport');
        $arrival   = $this->input->post('ArrivalAirport');

        $this->data['selectedDeparture'] = $departure;
        $this->data['selectedArrival'] = $arrival;

        $results = array();

        if($departure != $arrival){
            foreach($flights as $flight){
                if($flight -> DepartureAirport == $departure
                && $flight -> ArrivalAirport == $arrival){
                    $results[$flight->PlaneID] = $flight;
                }
            }
            $this -> data['errorMsg'] = '';
        } else {
            $this -> data['errorMsg'] = 'departure and arrival should be different';
        }


        $this -> data['pagebody'] = 'bookTemplate';
        $this -> data['flight'] = $results;
        $this -> render();
    }

    function book(){

        $this->showit();
    }

    function showit(){

        $this -> render();
    }


}
