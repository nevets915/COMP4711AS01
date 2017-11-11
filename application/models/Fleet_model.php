<?php

/**
 * This is a "CMS" model for quotes, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author jim
 */
class Fleet_Model extends CSV_Model
{
    public function __construct()
    {
        parent::__construct(APPPATH . '../data/fleet.csv', 'id');        
    }
    
    // provide form validation rules
    public function rules()
    {
        $config = array(
        ['field' => 'manufacturer', 'label' => 'Manufacturer', 'rules' => 'alpha_numeric_spaces|max_length[3]'],
        ['field' => 'model', 'label' => 'Model', 'rules' => 'alpha_numeric_spaces|max_length[3]'],
        ['field' => 'seats', 'label' => 'Seats', 'rules' => 'alpha_numeric_spaces|max_length[3]'],
        ['field' => 'reach', 'label' => 'TODO task', 'Reach' => 'alpha_numeric_spaces|max_length[3]'],
        ['field' => 'cruise', 'label' => 'Cruise', 'rules' => 'alpha_numeric_spaces|max_length[3]'],
        ['field' => 'takeoff', 'label' => 'Takeoff', 'rules' => 'alpha_numeric_spaces|max_length[3]'],
        ['field' => 'hourly', 'label' => 'Hourly', 'rules' => 'alpha_numeric_spaces|max_length[3]'],
        );
        return $config;
    }
}
