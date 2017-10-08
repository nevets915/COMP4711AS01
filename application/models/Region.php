<?php
/**
 * Created by PhpStorm.
 * User: dongwonkim
 * Date: 2017-10-07
 * Time: 2:16 PM
 */

class Region extends CI_Model{

    var $regions = array(
          0 =>
          array(
             'id' => '1',
             'name' => 'Vancouver Island',
             'anchor' => 'YCD',
          ),
          1 =>
          array(
             'id' => '2',
             'name' => 'Lower Mainland',
             'anchor' => 'YDT',
          ),
          2 =>
          array(
             'id' => '3',
             'name' => 'Thompson-Nicola',
             'anchor' => 'YKA',
          ),
          3 =>
          array(
             'id' => '4',
             'name' => 'Kootenay',
             'anchor' => 'YXC',
          ),
          4 =>
          array(
             'id' => '5',
             'name' => 'Cariboo',
             'anchor' => 'YWL',
          ),
          5 =>
          array(
             'id' => '6',
             'name' => 'Skeena',
             'anchor' => 'YYD',
          ),
          6 =>
          array(
             'id' => '7',
             'name' => 'Omineca',
             'anchor' => 'YXS',
          ),
          7 =>
          array(
             'id' => '8',
             'name' => 'Okanagan',
             'anchor' => 'YYF',
          ),
          8 =>
          array(
             'id' => '9',
             'name' => 'Peace',
             'anchor' => 'YXJ',
          )
        );

    public function __construct(){
        parent::__construct();

        // inject each "record" key into the record itself, for ease of presentation
        foreach ($this->regions as $key => $record)
        {
            $record['key'] = $key;
            $this->regions[$key] = $record;
        }
    }

    // retrieve a single quote, null if not found
    public function get($which) {
        return !isset($this->regions[$which]) ? null : $this->regions[$which];
    }

    // retrieve all of the quotes
    public function all(){
        return $this->regions;
    }
}