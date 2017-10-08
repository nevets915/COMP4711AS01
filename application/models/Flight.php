<?php

/**
 * This is a "CMS" model for quotes, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author jim
 */
class Flight extends CI_Model
{

    var $flights = array(
        '0' => array(
            'id'            => "001",
            'Destination'   => "YAZ",
            'Airplane'      => "Avanti II",
            'Departure time'   => "8:00",
            'Arrival time'  => "8:50"
        ),
        '1' => array(
            'id'            => "002",
            'Destination'   => "YPB",
            'Airplane'      => "Cessna",
            'Departure time'   => "8:00",
            'Arrival time'  => "8:50"
        ),
        '2' => array(
            'id'            => "003",
            'Destination'   => "YCD",
            'Airplane'      => "Avanti II",
            'Departure time'   => "9:30",
            'Arrival time'  => "10:20"
        ),
        '3' => array(
            'id'            => "004",
            'Destination'   => "YCD",
            'Airplane'      => "Cessna",
            'Departure time'   => "9:30",
            'Arrival time'  => "10:20"
        ),
        '4' => array(
            'id'            => "005",
            'Destination'   => "YAZ",
            'Airplane'      => "Avanti II",
            'Departure time'   => "10:50",
            'Arrival time'  => "11:40"
        ),
        '5' => array(
            'id'            => "006",
            'Destination'   => "YPB",
            'Airplane'      => "Cessna",
            'Departure time'   => "10:50",
            'Arrival time'  => "11:40"
        ),
        '6' => array(
            'id'            => "007",
            'Destination'   => "YCD",
            'Airplane'      => "Avanti II",
            'Departure time'   => "12:10",
            'Arrival time'  => "13:00"
        ),
        '7' => array(
            'id'            => "008",
            'Destination'   => "YCD",
            'Airplane'      => "Cessna",
            'Departure time'   => "12:10",
            'Arrival time'  => "13:00"
        ),
        '8' => array(
            'id'            => "009",
            'Destination'   => "YQQ",
            'Airplane'      => "Avanti II",
            'Departure time'   => "13:30",
            'Arrival time'  => "14:20"
        ),
        '9' => array(
            'id'            => "010",
            'Destination'   => "YQQ",
            'Airplane'      => "Cessna",
            'Departure time'   => "13:30",
            'Arrival time'  => "14:20"
        ),
        '10' => array(
            'id'            => "011",
            'Destination'   => "YCD",
            'Airplane'      => "Avanti II",
            'Departure time'   => "14:50",
            'Arrival time'  => "15:40"
        ),
        '11' => array(
            'id'            => "012",
            'Destination'   => "YCD",
            'Airplane'      => "Cessna",
            'Departure time'   => "14:50",
            'Arrival time'  => "15:40"
        ),
        
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
