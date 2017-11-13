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

        $fields1 = array(
            'fDepAirport'   => form_label('Departure Airport')
                                .form_dropdown('DepartureAirport', $this->flights_model->flightsDepartures()),
            'fArrAirport'   => form_label('Arrival Airport')
                                .form_dropdown('ArrivalAirport', $this->flights_model->flightsArrivals()),
            'fBookSubmit'   => form_submit('submit', 'Search')
        );

        $fields2 = array(
            'fDepAirport1'   => form_label('Departure Airport')
                .form_dropdown('DepartureAirport', $this->flights_model->flightsDepartures()),
            'fArrAirport1'   => form_label('Arrival Airport1')
                .form_dropdown('ArrivalAirport1', $this->flights_model->flightsDepartures()),
            'fArrAirport2'   => form_label('Arrival Airport2')
                .form_dropdown('ArrivalAirport2', $this->flights_model->flightsDepartures()),
            'fArrAirport3'   => form_label('Arrival Airport3')
                .form_dropdown('ArrivalAirport3', $this->flights_model->flightsDepartures()),
            'fBookSubmit2'        => form_submit('submit2', 'Search')
        );

        $this -> data = array_merge($this->data, $fields1);
        $this -> data = array_merge($this->data, $fields2);

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


        $this -> load -> helper('form');

        $flights = $this -> flights_model -> all();
        $airlines = $this -> wacky -> airlines();

        $departure = $this->input->post('DepartureAirport');
        $arrival   = $this->input->post('ArrivalAirport');

        $departureID = $this->getAirportID($departure);
        $arrivalID = $this->getAirportID($arrival);

        $this->data['selectedDeparture'] = $departure;
        $this->data['selectedArrival'] = $arrival;

        $results = array();

        if($departure != $arrival){
            //non-stop
            foreach($flights as $flight){
                if($flight -> DepartureAirport == $departure
                && $flight -> ArrivalAirport == $arrival){

                    $results[$flight->PlaneID] = $flight;
                }
            }

            $this -> data['errorMsg'] = '';
            $this -> data['select'] = form_submit('book', 'Select');

        } else {
            $this -> data['errorMsg'] = 'departure and arrival should be different';
            $this -> data['select'] = '';
        }


        $this -> data['pagebody'] = 'bookTemplate';
        $this -> data['flight'] = $results;
        $this -> render();
    }

    function submit2(){
        $this -> load -> helper('form');

        $flights = $this -> flights_model -> all();

        $isFound = FALSE;

        $departure = $this->input->post('DepartureAirport');
        $arrival1   = $this->input->post('ArrivalAirport1');
        $arrival2   = $this->input->post('ArrivalAirport2');
        $arrival3   = $this->input->post('ArrivalAirport3');

        $departureID = $this->getAirportID($departure);
        $arrivalID = $this->getAirportID($arrival1);

        $this->data['selectedDeparture'] = $departure;
        $this->data['selectedArrival1'] = $arrival1;
        $this->data['selectedArrival2'] = $arrival2;
        $this->data['selectedArrival3'] = $arrival3;

        if($departure == $arrival1
        || $arrival1 == $arrival2
        || $arrival2 == $arrival3){
            $this -> data['errorMsg'] = "Can't go from same place to same place";
            $this -> data['select'] = '';
        } else {
            foreach($flights as $flight){
                if($flight -> DepartureAirport == $departure
                    && $flight -> ArrivalAirport == $arrival1){
                    $results1[$flight->PlaneID] = $flight;

                }

                if($flight -> DepartureAirport == $arrival1
                    && $flight -> ArrivalAirport == $arrival2){
                    $results2[$flight->PlaneID] = $flight;

                }

                if($flight -> DepartureAirport == $arrival2
                    && $flight -> ArrivalAirport == $arrival3){

                    $results3[$flight->PlaneID] = $flight;

                }
            }

            if(!empty($results1)) {
                $this -> data['flight1'] = $results1;
              

            } else {
                $this -> data['flight1'][] = array(
                    'PlaneID'=> '',
                    'DepartureAirport'=> '',
                    'ArrivalAirport'=> '',
                    'DepartureTime'=> '',
                    'ArrivalTime'=> '',
                    'select'=> '');
            }

            if(!empty($results2)){
                $this -> data['flight2'] = $results2;
                $this -> data['select'] = form_submit('book', 'Select');

            } else {
                $this -> data['flight2'][] = array(
                            'PlaneID'=> '',
                            'DepartureAirport'=> '',
                            'ArrivalAirport'=> '',
                            'DepartureTime'=> '',
                            'ArrivalTime'=> '',
                            'select'=> '');
            }

            if(!empty($results3)){
                $this -> data['flight3'] = $results3;
                $this -> data['select'] = form_submit('book', 'Select');


            } else {
                $this -> data['flight3'][] = array(
                    'PlaneID'=> '',
                    'DepartureAirport'=> '',
                    'ArrivalAirport'=> '',
                    'DepartureTime'=> '',
                    'ArrivalTime'=> '',
                    'select'=> '');
            }




            $this -> data['errorMsg'] = '';
            $this -> data['select'] = 'C';
        }



        $this -> data['pagebody'] = 'bookTemplate2';
        $this -> render();
    }

    function getAirportID($name) {
        $airports = $this -> wacky -> airports();

        foreach ($airports as $airport){
            if($airport['airport'] == $name)
                $result = $airport['id'];
        }

        return $result;
    }

    function getAirportName($id) {
        $airports = $this -> wacky -> airports();

        foreach ($airports as $airport){
            if($airport['id'] == $id)
                $result = $airport['airport'];
        }

        return $result;
    }

    function book(){
        $planeID = $this->input->post('PlaneID');
        $departure = $this->input->post('DepartureAirport');
        $arrival   = $this->input->post('ArrivalAirport');



        $this -> data['PlaneID'] = $planeID;
        $this -> data['DepartureAirport'] = $planeID;
        $this -> data['ArrivalAirport'] = $planeID;

        $this -> data['pagebody'] = 'bookResult';
        $this->showit();
    }

    function showit(){

        $this -> render();
    }


}
