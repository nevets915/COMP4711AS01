<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * This is to be a "RESTish" service controller, returning your model data 
 * in JSON format, on demand. The "fleet" subcontroller, accessible as 
 * "/info/fleet", shall return the data content of your "fleet" model. The 
 * "flights" subcontroller shall do the same for your flights model.
 *
 * @author namblue
 */
class Info extends CI_Controller
{
    /*
     * Returns all data from the Fleet model as JSON
     */
    public function fleet()
    {
        $record = $this->fleet->all();
        return json_encode($record);
    }
    
    /*
     * Returns all data from Flights model as JSOn
     */
    public function flights()
    {
        $record = $this->flights->all();
        return json_encode($record);
    }
}
