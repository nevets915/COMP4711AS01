<?php

/**
 * This is a "CMS" model for quotes, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author jim
 */
class Flights_Model extends CI_Model
{
    var $flights = array(
        '0' => array(
            'id'            => "001",
            'Destination'   => "YAZ",
            'ArrivalAirport'       => "Tofino/Long Beach Airport",
            'DepartureAirport'       => "Nanaimo Airport",
            'PlaneID'      => "BB_avanti_001",
            'DepartureTime'   => "8:00",
            'ArrivalTime'  => "8:50"
        ),
        '1' => array(
            'id'            => "002",
            'Destination'   => "YPB",
            'ArrivalAirport'       => "Port Alberni (Alberni Valley Regional) Airport",
            'DepartureAirport'       => "Nanaimo Airport",
            'PlaneID'      => "BB_caravan_001",
            'DepartureTime'   => "8:00",
            'ArrivalTime'  => "8:50"
        ),
        '2' => array(
            'id'            => "003",
            'Destination'   => "YCD",
            'ArrivalAirport'       => "Nanaimo Airport",
            'DepartureAirport'       => "Tofino/Long Beach Airport",
            'PlaneID'      => "BB_avanti_001",
            'DepartureTime'   => "9:30",
            'ArrivalTime'  => "10:20"
        ),
        '3' => array(
            'id'            => "004",
            'Destination'   => "YCD",
            'ArrivalAirport'       => "Nanaimo Airport",
            'DepartureAirport'       => "Port Alberni (Alberni Valley Regional) Airport",
            'PlaneID'      => "BB_caravan_001",
            'DepartureTime'   => "9:30",
            'ArrivalTime'  => "10:20"
        ),
        '4' => array(
            'id'            => "005",
            'Destination'   => "YAZ",
            'ArrivalAirport'       => "Tofino/Long Beach Airport",
            'DepartureAirport'       => "Nanaimo Airport",
            'PlaneID'      => "BB_avanti_001",
            'DepartureTime'   => "10:50",
            'ArrivalTime'  => "11:40"
        ),
        '5' => array(
            'id'            => "006",
            'Destination'   => "YPB",
            'ArrivalAirport'       => "Port Alberni (Alberni Valley Regional) Airport",
            'DepartureAirport'       => "Nanaimo Airport",
            'PlaneID'      => "BB_caravan_001",
            'DepartureTime'   => "10:50",
            'ArrivalTime'  => "11:40"
        ),
        '6' => array(
            'id'            => "007",
            'Destination'   => "YCD",
            'ArrivalAirport'       => "Nanaimo Airport",
            'DepartureAirport'       => "Tofino/Long Beach Airport",
            'PlaneID'      => "BB_avanti_001",
            'DepartureTime'   => "12:10",
            'ArrivalTime'  => "13:00"
        ),
        '7' => array(
            'id'            => "008",
            'Destination'   => "YCD",
            'ArrivalAirport'       => "Nanaimo Airport",
            'DepartureAirport'       => "Port Alberni (Alberni Valley Regional) Airport",
            'PlaneID'      => "BB_caravan_001",
            'DepartureTime'   => "12:10",
            'ArrivalTime'  => "13:00"
        ),
        '8' => array(
            'id'            => "009",
            'Destination'   => "YQQ",
            'ArrivalAirport'       => "CFB Comox (Comox Airport)",
            'DepartureAirport'       => "Nanaimo Airport",
            'PlaneID'      => "BB_avanti_001",
            'DepartureTime'   => "13:30",
            'ArrivalTime'  => "14:20"
        ),
        '9' => array(
            'id'            => "010",
            'Destination'   => "YQQ",
            'ArrivalAirport'       => "CFB Comox (Comox Airport)",
            'DepartureAirport'       => "Nanaimo Airport",
            'PlaneID'      => "BB_caravan_001",
            'DepartureTime'   => "13:30",
            'ArrivalTime'  => "14:20"
        ),
        '10' => array(
            'id'            => "011",
            'Destination'   => "YCD",
            'ArrivalAirport'       => "Nanaimo Airport",
            'DepartureAirport'       => "CFB Comox (Comox Airport)",
            'PlaneID'      => "BB_avanti_001",
            'DepartureTime'   => "14:50",
            'ArrivalTime'  => "15:40"
        ),
        '11' => array(
            'id'            => "012",
            'Destination'   => "YCD",
            'ArrivalAirport'       => "Nanaimo Airport",
            'DepartureAirport'       => "CFB Comox (Comox Airport)",
            'PlaneID'      => "BB_caravan_001",
            'DepartureTime'   => "14:50",
            'ArrivalTime'  => "15:40"
        ),
        
    );


    public function __construct(){
        parent::__construct();

        // inject each "record" key into the record itself, for ease of presentation
        foreach ($this-> flights as $key => $record)
        {
            $record['key'] = $key;
            $this->flights[$key] = $record;
        }
    }

    // retrieve a single quote, null if not found
    public function get($which) {
        return !isset($this->flights[$which]) ? null : $this->flights[$which];
    }

    // retrieve all of the quotes
    public function all(){
        return $this->flights;
    }
}
