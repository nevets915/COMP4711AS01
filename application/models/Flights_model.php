<?php

/**
 * This is a "CMS" model for quotes, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author jim
 */
class Flights_Model extends CSV_Model
{
    public function __construct()
    {
        parent::__construct(APPPATH . '../data/flights.csv', 'id');
        $this->airports = $this->wacky->airports();
    }

    public function flightsDepartures(){

        $results = array();

        $flights = $this -> all();

        foreach ($flights as $flight){
            if(!in_array($flight->DepartureAirport, $results))
                array_push($results, $flight->DepartureAirport);
        }


        return $results;
    }

    public function flightsArrival(){

        $results = array();

        $flights = $this -> all();

        foreach ($flights as $flight){
            if(!in_array($flight->ArrivalAirport, $results))
                array_push($results, $flight->ArrivalAirport);
        }


        return $results;
    }
}
