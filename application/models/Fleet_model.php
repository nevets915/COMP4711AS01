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
    
    function planeIds()
    {
            $results = array();
            foreach ($this->_data as $key => $record)
                $results[] = $key;
            return $results;
    }
    
        // provide form validation rules
    public function rules()
    {
        $config = array(
        ['field' => 'Manufacturer', 'label' => 'Manufacturer', 'rules' => 'required'],
        ['field' => 'Model', 'label' => 'Model', 'rules' => 'required'],
        );
        return $config;
    }
}
