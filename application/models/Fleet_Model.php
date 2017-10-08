<?php

/**
 * This is a "CMS" model for quotes, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author jim
 */
class Fleet_Model extends CI_Model
{

    var $fleets = array(
        '0' => array(
            'id'            => "avanti_001",
            'manufacturer'  => "Piaggo",
            'model'         => "Avanti II",
            'seats'         => "8",
            'reach'         => "2797",
            'cruise'        => "589",
            'takeoff'       => "994",
            'hourly'        => "977"
        ),
        '1' => array(
            'id' => "caravan_001",
            'manufacturer' => "Cessna",
            'model' => "Grand Caravan EX",
            'seats' => "14",
            'reach' => "1689",
            'cruise' => "340",
            'takeoff' => "660",
            'hourly' => "389"
        )
    );


    public function __construct(){
        parent::__construct();

        // inject each "record" key into the record itself, for ease of presentation
        foreach ($this-> fleets as $key => $record)
        {
            $record['key'] = $key;
            $this->fleets[$key] = $record;
        }
    }

    // retrieve a single quote, null if not found
    public function get($which) {
        return !isset($this->fleets[$which]) ? null : $this->fleets[$which];
    }

    // retrieve all of the quotes
    public function all(){
        return $this->fleets;
    }
}
