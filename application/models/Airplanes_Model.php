<?php
/**
 * Created by PhpStorm.
 * User: kimdongwon
 * Date: 2017-10-06
 * Time: 11:34 AM
 */

class Airplanes_Model extends CI_Model{

    var $airplanes = array(
        '0' => array(
            'id'            => "avanti",
            'manufacturer'  => "Piaggo",
            'model'         => "Avanti II",
            'price'         => "7195",
            'seats'         => "8",
            'reach'         => "2797",
            'cruise'        => "589",
            'takeoff'       => "994",
            'hourly'        => "977"
        ),
        '1' => array(
            'id' =>"baron",
            'manufacturer' =>"Beechcraft",
            'model' =>"Baron",
            'price' =>"1350",
            'seats' =>"4",
            'reach' =>"1948",
            'cruise' =>"373",
            'takeoff' =>"701",
            'hourly' =>"340"
        ),
        '2' => array(
            'id' => "caravan",
            'manufacturer' => "Cessna",
            'model' => "Grand Caravan EX",
            'price' => "2300",
            'seats' => "14",
            'reach' => "1689",
            'cruise' => "340",
            'takeoff' => "660",
            'hourly' => "389"
        ),
        '3' => array(
            'id' => "citation",
            'manufacturer' => "Cessna",
            'model' => "Citation M2",
            'price' => "3200",
            'seats' => "7",
            'reach' => "1550",
            'cruise' => "748",
            'takeoff' => "978",
            'hourly' => "1122"
        ),
        '4' => array(
            'id' => "kingair",
            'manufacturer' => "Beechcraft",
            'model' => "King Air C90",
            'price' => "3900",
            'seats' => "12",
            'reach' => "2446",
            'cruise' => "500",
            'takeoff' => "1402",
            'hourly' => "990"
        ),
        '5' => array(
            'id' => "mustang",
            'manufacturer' => "Cessna",
            'model' => "Citation Mustang",
            'price' => "2770",
            'seats' => "4",
            'reach' => "2130",
            'cruise' => "630",
            'takeoff' => "950",
            'hourly' => "1015"
        ),
        '6' => array(
            'id' => "pc12ng",
            'manufacturer' => "Pilatus",
            'model' => "PC-12 NG",
            'price' => "3300",
            'seats' => "9",
            'reach' => "4147",
            'cruise' => "500",
            'takeoff' => "450",
            'hourly' => "727"
        ),
        '7' => array(
            'id' => "phenom100",
            'manufacturer' => "Embraer",
            'model' => "Phenom 100",
            'price' => "2980",
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
        foreach ($this->airplanes as $key => $record)
        {
            $record['key'] = $key;
            $this->airplanes[$key] = $record;
        }
    }

    // retrieve a single quote, null if not found
    public function get($which) {
        return !isset($this->airplanes[$which]) ? null : $this->airplanes[$which];
    }

    // retrieve all of the quotes
    public function all(){
        return $this->airplanes;
    }
}
