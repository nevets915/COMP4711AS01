<?php
/**
 * Created by PhpStorm.
 * User: dongwonkim
 * Date: 2017-10-07
 * Time: 2:19 PM
 */

class Airlines_Model extends CI_Model{

    var $airlines = array (
        0 =>
            array(
                'id' => 'albatros',
                'base' => 'YBL',
                'dest1' => 'YAL',
                'dest2' => 'YZT',
                'dest3' => 'YMP',
            ),
        1 =>
            array(
                'id' => 'bluebird',
                'base' => 'YCD',
                'dest1' => 'YQQ',
                'dest2' => 'YAZ',
                'dest3' => 'YPB',
            ),
        2 =>
            array(
                'id' => 'cuckoo',
                'base' => 'YCG',
                'dest1' => 'ZGF',
                'dest2' => 'YCW',
                'dest3' => 'ZMH',
            ),
        3 =>
            array(
                'id' => 'dove',
                'base' => 'YCW',
                'dest1' => 'YSE',
                'dest2' => 'YPB',
                'dest3' => 'YXT',
            ),
        4 =>
            array(
                'id' => 'eagle',
                'base' => 'YDQ',
                'dest1' => 'YXJ',
                'dest2' => 'YNH',
                'dest3' => 'YCQ',
            ),
        5 =>
            array(
                'id' => 'falcon',
                'base' => 'YDT',
                'dest1' => 'YCD',
                'dest2' => 'ZGF',
                'dest3' => 'YXC',
            ),
        6 =>
            array(
                'id' => 'goose',
                'base' => 'YGE',
                'dest1' => 'ZMH',
                'dest2' => 'YYJ',
                'dest3' => 'YVE',
            ),
        7 =>
            array(
                'id' => 'heron',
                'base' => 'YKA',
                'dest1' => 'YGE',
                'dest2' => 'YBD',
                'dest3' => 'YSE',
            ),
        8 =>
            array(
                'id' => 'ibis',
                'base' => 'YLW',
                'dest1' => 'YCP',
                'dest2' => 'YAA',
                'dest3' => 'YCG',
            ),
        9 =>
            array(
                'id' => 'junco',
                'base' => 'YPK',
                'dest1' => 'YCW',
                'dest2' => 'ZMH',
                'dest3' => 'YYF',
            ),
        10 =>
            array(
                'id' => 'kite',
                'base' => 'YPR',
                'dest1' => 'ZMT',
                'dest2' => 'YZP',
                'dest3' => 'YXT',
            ),
        11 =>
            array(
                'id' => 'loon',
                'base' => 'YPW',
                'dest1' => 'YBD',
                'dest2' => 'ZEL',
                'dest3' => 'YPU',
            ),
        12 =>
            array(
                'id' => 'magpie',
                'base' => 'YQZ',
                'dest1' => 'YXS',
                'dest2' => 'YWL',
                'dest3' => 'YKA',
            ),
        13 =>
            array(
                'id' => 'nuthatch',
                'base' => 'YRV',
                'dest1' => 'YCG',
                'dest2' => 'YMB',
                'dest3' => 'YCZ',
            ),
        14 =>
            array(
                'id' => 'owl',
                'base' => 'YSN',
                'dest1' => 'YRV',
                'dest2' => 'YCZ',
                'dest3' => 'YVE',
            ),
        15 =>
            array(
                'id' => 'pelican',
                'base' => 'YVR',
                'dest1' => 'YPR',
                'dest2' => 'YXS',
                'dest3' => 'YXC',
            ),
        16 =>
            array(
                'id' => 'quail',
                'base' => 'YXC',
                'dest1' => 'YBD',
                'dest2' => 'YAZ',
                'dest3' => 'YCP',
            ),
        17 =>
            array(
                'id' => 'raven',
                'base' => 'YXS',
                'dest1' => 'YPR',
                'dest2' => 'YDQ',
                'dest3' => 'YVR',
            ),
        18 =>
            array(
                'id' => 'swallow',
                'base' => 'YXT',
                'dest1' => 'XQU',
                'dest2' => 'YYD',
                'dest3' => 'ZST',
            ),
        19 =>
            array(
                'id' => 'thrush',
                'base' => 'YXX',
                'dest1' => 'YDT',
                'dest2' => 'YMB',
                'dest3' => 'YLW',
            ),
        20 =>
            array(
                'id' => 'unlikely',
                'base' => 'YYD',
                'dest1' => 'YPZ',
                'dest2' => 'YDL',
                'dest3' => 'ZST',
            ),
        21 =>
            array(
                'id' => 'vulture',
                'base' => 'YYE',
                'dest1' => 'YDL',
                'dest2' => 'YXJ',
                'dest3' => 'YXX',
            ),
        22 =>
            array(
                'id' => 'warbler',
                'base' => 'YYF',
                'dest1' => 'YHE',
                'dest2' => 'YKA',
                'dest3' => 'YXC',
            ),
        23 =>
            array(
                'id' => 'xwing',
                'base' => 'YYJ',
                'dest1' => 'YBL',
                'dest2' => 'YVR',
                'dest3' => 'YPW',
            ),
        24 =>
            array(
                'id' => 'yellowhammer',
                'base' => 'YZY',
                'dest1' => 'YQZ',
                'dest2' => 'ZEL',
                'dest3' => 'YGB',
            ),
        25 =>
            array(
                'id' => 'zipper',
                'base' => 'ZMH',
                'dest1' => 'YVR',
                'dest2' => 'YXS',
                'dest3' => 'YPR',
            )
    );


    public function __construct(){
        parent::__construct();

        // inject each "record" key into the record itself, for ease of presentation
        foreach ($this->airlines as $key => $record)
        {
            $record['key'] = $key;
            $this->airlines[$key] = $record;
        }
    }

    // retrieve a single quote, null if not found
    public function get($which) {
        return !isset($this->airplanes[$which]) ? null : $this->airlines[$which];
    }

    // retrieve all of the quotes
    public function all(){
        return $this->airlines;
    }
}