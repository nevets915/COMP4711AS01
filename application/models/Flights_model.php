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
    }
    
    // provide form validation rules
    public function rules()
    {
        $config = array(
        ['field' => 'Destination', 'label' => 'Destination', 'rules' => 'alpha_numeric_spaces|max_length[1]'],
        ['field' => 'ArrivalAirport', 'label' => 'Arrival Airport', 'rules' => 'alpha_numeric_spaces|max_length[1]'],
        ['field' => 'DepartureAirport', 'label' => 'Departure Airport', 'rules' => 'alpha_numeric_spaces|max_length[1]'],
        ['field' => 'PlaneId', 'label' => 'Plane ID', 'rules' => 'alpha_numeric_spaces|max_length[1]'],
        ['field' => 'DepartureTime', 'label' => 'Departure Time', 'rules' => 'alpha_numeric_spaces|max_length[1]'],
        ['field' => 'ArrivalTime', 'label' => 'Arrival Time', 'rules' => 'alpha_numeric_spaces|max_length[1]'],
        );
        return $config;
    }
}
