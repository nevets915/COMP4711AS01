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
        ['field' => 'destination', 'label' => 'Destination', 'rules' => 'alpha_numeric_spaces|max_length[3]'],
        ['field' => 'arrivalairport', 'label' => 'Arrival Airport', 'rules' => 'alpha_numeric_spaces|max_length[3]'],
        ['field' => 'departureairport', 'label' => 'Departure Airport', 'rules' => 'alpha_numeric_spaces|max_length[3]'],
        ['field' => 'planeid', 'label' => 'TODO task', 'Plane Id' => 'alpha_numeric_spaces|max_length[3]'],
        ['field' => 'departuretime', 'label' => 'Departure Time', 'rules' => 'alpha_numeric_spaces|max_length[3]'],
        ['field' => 'arrivaltime', 'label' => 'Arrival Time', 'rules' => 'alpha_numeric_spaces|max_length[3]'],
        );
        return $config;
    }
}
