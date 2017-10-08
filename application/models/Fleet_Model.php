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
            'id'            => "avanti",
            'manufacturer'  => "Piaggo",
            'model'         => "Avanti II",
            'seats'         => "8",
            'reach'         => "2797",
            'cruise'        => "589",
            'takeoff'       => "994",
            'hourly'        => "977"
        ),
        '1' => array(
            'id'            => "avanti",
            'manufacturer'  => "Piaggo",
            'model'         => "Avanti II",
            'seats'         => "8",
            'reach'         => "2797",
            'cruise'        => "589",
            'takeoff'       => "994",
            'hourly'        => "977"
        ),
        '2' => array(
            'id'            => "avanti",
            'manufacturer'  => "Piaggo",
            'model'         => "Avanti II",
            'seats'         => "8",
            'reach'         => "2797",
            'cruise'        => "589",
            'takeoff'       => "994",
            'hourly'        => "977"
        ),
        '3' => array(
            'id'            => "avanti",
            'manufacturer'  => "Piaggo",
            'model'         => "Avanti II",
            'seats'         => "8",
            'reach'         => "2797",
            'cruise'        => "589",
            'takeoff'       => "994",
            'hourly'        => "977"
        ),
        '4' => array(
            'id'            => "avanti",
            'manufacturer'  => "Piaggo",
            'model'         => "Avanti II",
            'seats'         => "8",
            'reach'         => "2797",
            'cruise'        => "589",
            'takeoff'       => "994",
            'hourly'        => "977"
        ),
        '5' => array(
            'id'            => "avanti",
            'manufacturer'  => "Piaggo",
            'model'         => "Avanti II",
            'seats'         => "8",
            'reach'         => "2797",
            'cruise'        => "589",
            'takeoff'       => "994",
            'hourly'        => "977"
        ),
        '6' => array(
            'id'            => "avanti",
            'manufacturer'  => "Piaggo",
            'model'         => "Avanti II",
            'seats'         => "8",
            'reach'         => "2797",
            'cruise'        => "589",
            'takeoff'       => "994",
            'hourly'        => "977"
        ),
        '7' => array(
            'id'            => "avanti",
            'manufacturer'  => "Piaggo",
            'model'         => "Avanti II",
            'seats'         => "8",
            'reach'         => "2797",
            'cruise'        => "589",
            'takeoff'       => "994",
            'hourly'        => "977"
        ),
        '8' => array(
            'id'            => "avanti",
            'manufacturer'  => "Piaggo",
            'model'         => "Avanti II",
            'seats'         => "8",
            'reach'         => "2797",
            'cruise'        => "589",
            'takeoff'       => "994",
            'hourly'        => "977"
        ),
        '9' => array(
            'id'            => "avanti",
            'manufacturer'  => "Piaggo",
            'model'         => "Avanti II",
            'seats'         => "8",
            'reach'         => "2797",
            'cruise'        => "589",
            'takeoff'       => "994",
            'hourly'        => "977"
        ),
        '10' => array(
            'id' =>"baron",
            'manufacturer' =>"Beechcraft",
            'model' =>"Baron",
            'seats' =>"4",
            'reach' =>"1948",
            'cruise' =>"373",
            'takeoff' =>"701",
            'hourly' =>"340"
        ),
        '11' => array(
            'id' =>"baron",
            'manufacturer' =>"Beechcraft",
            'model' =>"Baron",
            'seats' =>"4",
            'reach' =>"1948",
            'cruise' =>"373",
            'takeoff' =>"701",
            'hourly' =>"340"
        ),
        '12' => array(
            'id' =>"baron",
            'manufacturer' =>"Beechcraft",
            'model' =>"Baron",
            'seats' =>"4",
            'reach' =>"1948",
            'cruise' =>"373",
            'takeoff' =>"701",
            'hourly' =>"340"
        ),
        '13' => array(
            'id' =>"baron",
            'manufacturer' =>"Beechcraft",
            'model' =>"Baron",
            'seats' =>"4",
            'reach' =>"1948",
            'cruise' =>"373",
            'takeoff' =>"701",
            'hourly' =>"340"
        ),
        '14' => array(
            'id' =>"baron",
            'manufacturer' =>"Beechcraft",
            'model' =>"Baron",
            'seats' =>"4",
            'reach' =>"1948",
            'cruise' =>"373",
            'takeoff' =>"701",
            'hourly' =>"340"
        ),
        '15' => array(
            'id' =>"baron",
            'manufacturer' =>"Beechcraft",
            'model' =>"Baron",
            'seats' =>"4",
            'reach' =>"1948",
            'cruise' =>"373",
            'takeoff' =>"701",
            'hourly' =>"340"
        ),
        '16' => array(
            'id' => "caravan",
            'manufacturer' => "Cessna",
            'model' => "Grand Caravan EX",
            'seats' => "14",
            'reach' => "1689",
            'cruise' => "340",
            'takeoff' => "660",
            'hourly' => "389"
        ),
        '17' => array(
            'id' => "citation",
            'manufacturer' => "Cessna",
            'model' => "Citation M2",
            'seats' => "7",
            'reach' => "1550",
            'cruise' => "748",
            'takeoff' => "978",
            'hourly' => "1122"
        ),
        '18' => array(
            'id' => "kingair",
            'manufacturer' => "Beechcraft",
            'model' => "King Air C90",
            'seats' => "12",
            'reach' => "2446",
            'cruise' => "500",
            'takeoff' => "1402",
            'hourly' => "990"
        ),
        '19' => array(
            'id' => "mustang",
            'manufacturer' => "Cessna",
            'model' => "Citation Mustang",
            'seats' => "4",
            'reach' => "2130",
            'cruise' => "630",
            'takeoff' => "950",
            'hourly' => "1015"
        ),
        '20' => array(
            'id' => "pc12ng",
            'manufacturer' => "Pilatus",
            'model' => "PC-12 NG",
            'seats' => "9",
            'reach' => "4147",
            'cruise' => "500",
            'takeoff' => "450",
            'hourly' => "727"
        ),
        '21' => array(
            'id' => "phenom100",
            'manufacturer' => "Embraer",
            'model' => "Phenom 100",
            'seats' => "4",
            'reach' => "2148",
            'cruise' => "704",
            'takeoff' => "1036",
            'hourly' => "926"
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
