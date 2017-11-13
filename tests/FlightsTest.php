<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Flight_modelTest extends PHPUnit_Framework_TestCase
 {
    private $CI;
    public function setUp()
    {
      // Load CI instance normally
      $this->CI = &get_instance();
    }

    public function testFlightsDepartures(){
        $flightDepartures = $this->CI->flights_model->flightsDepartures();

        $this->assertNotNull($flightDepartures);
        $this->assertNotEmpty($flightDepartures);
    }

    public function testFlightDeparturesWithNone(){
        $flightDepartures = $this->CI->flights_model->flightsDeparturesWithNone();

        $this->assertNotNull($flightDepartures);
        $this->assertNotEmpty($flightDepartures);
        $this->assertEquals($flightDepartures['None'], 'none');
    }

    public function testFlightArrivals(){
        $flightArrivals = $this->CI->flights_model->flightsArrivals();

        $this->assertNotNull($flightArrivals);
        $this->assertNotEmpty($flightArrivals);
    }
}
