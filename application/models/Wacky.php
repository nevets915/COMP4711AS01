<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * A model to retrieve shared data from the WACKY server.
 *
 * @author namblue
 */
class Wacky
{
    
    /*
     * Purpose: List the participating airlines
     * Returns: A list of active airlines, the data 
     * for an explicitly identified one, or else an error message 
     */
    public function airlines()
    {
        $response = file_get_contents('https://wacky.jlparry.com/info/airlines/');
        return json_decode($response);
    }
    
    /*
     * Purpose: List the airports used by WAC 
     * Returns: A list of known airports, the data 
     * for an explicitly identified one, or an error message 
     */
    public function airports()
    {
        $response = file_get_contents('https://wacky.jlparry.com/info/airports/');
        return json_decode($response);
    }
    
    /*
     * Purpose: List the aircraft recognized by WAC 
     * Returns: A list of allowed aircraft, the data 
     * for an explicitly identified one, or an error message 
     */
    public function airplanes()
    {
        $response = file_get_contents('https://wacky.jlparry.com/info/airplanes/');
        return json_decode($response);
    }
    
    /*
     * Purpose: List the regions recognized by WAC 
     * Returns: A list of allowed regions, the data 
     * for an explicitly identified one, or an error message 
     */
    public function regions()
    {
        $response = file_get_contents('https://wacky.jlparry.com/info/regions/');
        return json_decode($response);
    }    
}
