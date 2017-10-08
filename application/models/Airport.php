<?php
/**
 * Created by PhpStorm.
 * User: kimdongwon
 * Date: 2017-10-07
 * Time: 11:34 AM
 */
class Airport extends CI_Model{

        var $airports = array (
                    0 => array(
                    'id' => 'XQU',
                    'community' => 'Qualicum Beach',
                    'airport' => 'Qualicum Beach Airport',
                    'region' => '1',
                    'coordinates' => '49°20′14″N124°23′38″W',
                    'runway' => '1086',
                    'airline' => '',
                    ),
                    1 =>
                    array(
                    'id' => 'YAA',
                    'community' => 'Anahim Lake',
                    'airport' => 'Anahim Lake Airport',
                    'region' => '5',
                    'coordinates' => '52°27′08″N125°18′16″W',
                    'runway' => '1200',
                    'airline' => '',
                    ),
                    2 =>
                    array(
                    'id' => 'YAL',
                    'community' => 'Alert Bay',
                    'airport' => 'Alert Bay Airport',
                    'region' => '1',
                    'coordinates' => '50°34′56″N126°54′57″W',
                    'runway' => '910',
                    'airline' => '',
                    ),
                    3 =>
                    array(
                    'id' => 'YAZ',
                    'community' => 'Tofino',
                    'airport' => 'Tofino/Long Beach Airport',
                    'region' => '1',
                    'coordinates' => '49°04′56″N125°46′21″W',
                    'runway' => '1524',
                    'airline' => '',
                    ),
                    4 =>
                    array(
                    'id' => 'YBD',
                    'community' => 'Bella Coola',
                    'airport' => 'Bella Coola Airport',
                    'region' => '5',
                    'coordinates' => '52°23′15″N126°35′45″W',
                    'runway' => '1280',
                    'airline' => '',
                    ),
                    5 =>
                    array(
                    'id' => 'YBL',
                    'community' => 'Campbell River',
                    'airport' => 'Campbell River Airport',
                    'region' => '1',
                    'coordinates' => '49°57′03″N125°16′15″W',
                    'runway' => '1981',
                    'airline' => 'albatros',
                    ),
                    6 =>
                    array(
                    'id' => 'YCA',
                    'community' => 'Courtenay',
                    'airport' => 'Courtenay Airpark',
                    'region' => '1',
                    'coordinates' => '49°40′46″N124°58′54″W',
                    'runway' => '549',
                    'airline' => '',
                    ),
                    7 =>
                    array(
                    'id' => 'YCD',
                    'community' => 'Nanaimo',
                    'airport' => 'Nanaimo Airport',
                    'region' => '1',
                    'coordinates' => '49°03′08″N123°52′13″W',
                    'runway' => '2012',
                    'airline' => 'bluebird',
                    ),
                    8 =>
                    array(
                    'id' => 'YCG',
                    'community' => 'Castlegar',
                    'airport' => 'Castlegar Airport',
                    'region' => '4',
                    'coordinates' => '49°17′47″N117°37′57″W',
                    'runway' => '1615',
                    'airline' => 'cuckoo',
                    ),
                    9 =>
                    array(
                    'id' => 'YCP',
                    'community' => 'Blue River',
                    'airport' => 'Blue River Airport',
                    'region' => '3',
                    'coordinates' => '52°07′27″N119°17′33″W',
                    'runway' => '1544',
                    'airline' => '',
                    ),
                    10 =>
                    array(
                    'id' => 'YCQ',
                    'community' => 'Chetwynd',
                    'airport' => 'Chetwynd Airport',
                    'region' => '9',
                    'coordinates' => '55°41′14″N121°37′36″W',
                    'runway' => '1366',
                    'airline' => '',
                    ),
                    11 =>
                    array(
                    'id' => 'YCW',
                    'community' => 'Chilliwack',
                    'airport' => 'Chilliwack Airport',
                    'region' => '2',
                    'coordinates' => '49°09′10″N121°56′20″W',
                    'runway' => '1215',
                    'airline' => 'dove',
                    ),
                    12 =>
                    array(
                    'id' => 'YCZ',
                    'community' => 'Fairmont Hot Springs',
                    'airport' => 'Fairmont Hot Springs Airport',
                    'region' => '4',
                    'coordinates' => '50°19′49″N115°52′24″W',
                    'runway' => '1830',
                    'airline' => '',
                    ),
                    13 =>
                    array(
                    'id' => 'YDL',
                    'community' => 'Dease Lake',
                    'airport' => 'Dease Lake Airport',
                    'region' => '6',
                    'coordinates' => '58°25′20″N130°01′56″W',
                    'runway' => '1830',
                    'airline' => '',
                    ),
                    14 =>
                    array(
                    'id' => 'YDQ',
                    'community' => 'Dawson Creek',
                    'airport' => 'Dawson Creek Airport',
                    'region' => '9',
                    'coordinates' => '55°44′32″N120°10′59″W',
                    'runway' => '1524',
                    'airline' => 'eagle',
                    ),
                    15 =>
                    array(
                    'id' => 'YDT',
                    'community' => 'Delta',
                    'airport' => 'Boundary Bay Airport (Vancouver/Boundary Bay Airport)',
                    'region' => '2',
                    'coordinates' => '49°04′26″N123°00′27″W',
                    'runway' => '1709',
                    'airline' => 'falcon',
                    ),
                    16 =>
                    array(
                    'id' => 'YGB',
                    'community' => 'Texada',
                    'airport' => 'Texada/Gillies Bay Airport',
                    'region' => '2',
                    'coordinates' => '49°41′39″N124°31′04″W',
                    'runway' => '914',
                    'airline' => '',
                    ),
                    17 =>
                    array(
                    'id' => 'YGE',
                    'community' => 'Golden',
                    'airport' => 'Golden Airport',
                    'region' => '4',
                    'coordinates' => '51°17′57″N116°58′57″W',
                    'runway' => '1380',
                    'airline' => 'goose',
                    ),
                    18 =>
                    array(
                    'id' => 'YHE',
                    'community' => 'Hope',
                    'airport' => 'Hope Aerodrome',
                    'region' => '2',
                    'coordinates' => '49°22′06″N121°29′53″W',
                    'runway' => '1207',
                    'airline' => '',
                    ),
                    19 =>
                    array(
                    'id' => 'YJM',
                    'community' => 'Fort St. James',
                    'airport' => 'Fort St. James (Perison) Airport',
                    'region' => '9',
                    'coordinates' => '54°23′50″N124°15′46″W',
                    'runway' => '1219',
                    'airline' => '',
                    ),
                    20 =>
                    array(
                    'id' => 'YKA',
                    'community' => 'Kamloops',
                    'airport' => 'Kamloops Airport',
                    'region' => '3',
                    'coordinates' => '50°42′09″N120°26′55″W',
                    'runway' => '2438',
                    'airline' => 'heron',
                    ),
                    21 =>
                    array(
                    'id' => 'YLW',
                    'community' => 'Kelowna',
                    'airport' => 'Kelowna International Airport',
                    'region' => '8',
                    'coordinates' => '49°57′26″N119°22′40″W',
                    'runway' => '2713',
                    'airline' => 'ibis',
                    ),
                    22 =>
                    array(
                    'id' => 'YMB',
                    'community' => 'Merritt',
                    'airport' => 'Merritt Airport (Saunders Field)',
                    'region' => '3',
                    'coordinates' => '50°07′22″N120°44′42″W',
                    'runway' => '1220',
                    'airline' => '',
                    ),
                    23 =>
                    array(
                    'id' => 'YMP',
                    'community' => 'Port McNeill',
                    'airport' => 'Port McNeill Airport',
                    'region' => '1',
                    'coordinates' => '50°34′32″N127°01′43″W',
                    'runway' => '732',
                    'airline' => '',
                    ),
                    24 =>
                    array(
                    'id' => 'YNH',
                    'community' => 'Hudson\'s Hope',
                         'airport' => 'Hudson\'s Hope Airport',
                    'region' => '9',
                    'coordinates' => '56°02′08″N121°58′33″W',
                    'runway' => '1585',
                    'airline' => '',
                    ),
                    25 =>
                    array(
                    'id' => 'YNJ',
                    'community' => 'Langley',
                    'airport' => 'Langley Regional Airport',
                    'region' => '2',
                    'coordinates' => '49°06′04″N122°37′50″W',
                    'runway' => '836',
                    'airline' => '',
                    ),
                    26 =>
                    array(
                    'id' => 'YPB',
                    'community' => 'Port Alberni',
                    'airport' => 'Port Alberni (Alberni Valley Regional) Airport',
                    'region' => '1',
                    'coordinates' => '49°19′19″N124°55′52″W',
                    'runway' => '1205',
                    'airline' => '',
                    ),
                    27 =>
                    array(
                    'id' => 'YPK',
                    'community' => 'Pitt Meadows',
                    'airport' => 'Pitt Meadows Airport',
                    'region' => '2',
                    'coordinates' => '49°12′58″N122°42′36″W',
                    'runway' => '1524',
                    'airline' => 'junco',
                    ),
                    28 =>
                    array(
                    'id' => 'YPR',
                    'community' => 'Prince Rupert',
                    'airport' => 'Prince Rupert Airport',
                    'region' => '6',
                    'coordinates' => '54°17′10″N130°26′41″W',
                    'runway' => '1829',
                    'airline' => 'kite',
                    ),
                    29 =>
                    array(
                    'id' => 'YPU',
                    'community' => 'Puntzi Mountain',
                    'airport' => 'Puntzi Mountain Airport',
                    'region' => '5',
                    'coordinates' => '52°06′46″N124°08′41″W',
                    'runway' => '1832',
                    'airline' => '',
                    ),
                    30 =>
                    array(
                    'id' => 'YPW',
                    'community' => 'Powell River',
                    'airport' => 'Powell River Airport',
                    'region' => '2',
                    'coordinates' => '49°50′03″N124°30′01″W',
                    'runway' => '1104',
                    'airline' => 'loon',
                    ),
                    31 =>
                    array(
                    'id' => 'YPZ',
                    'community' => 'Burns Lake',
                    'airport' => 'Burns Lake Airport',
                    'region' => '6',
                    'coordinates' => '54°22′35″N125°57′05″W',
                    'runway' => '1542',
                    'airline' => '',
                    ),
                    32 =>
                    array(
                    'id' => 'YQQ',
                    'community' => 'Comox',
                    'airport' => 'CFB Comox (Comox Airport)',
                    'region' => '1',
                    'coordinates' => '49°42′39″N124°53′12″W',
                    'runway' => '3048',
                    'airline' => '',
                    ),
                    33 =>
                    array(
                    'id' => 'YQZ',
                    'community' => 'Quesnel',
                    'airport' => 'Quesnel Airport',
                    'region' => '5',
                    'coordinates' => '53°01′34″N122°30′37″W',
                    'runway' => '1677',
                    'airline' => 'magpie',
                    ),
                    34 =>
                    array(
                    'id' => 'YRV',
                    'community' => 'Revelstoke',
                    'airport' => 'Revelstoke Airport',
                    'region' => '3',
                    'coordinates' => '50°57′44″N118°11′04″W',
                    'runway' => '1571',
                    'airline' => 'nuthatch',
                    ),
                    35 =>
                    array(
                    'id' => 'YSE',
                    'community' => 'Squamish',
                    'airport' => 'Squamish Airport',
                    'region' => '2',
                    'coordinates' => '49°46′54″N123°09′43″W',
                    'runway' => '732',
                    'airline' => '',
                    ),
                    36 =>
                    array(
                    'id' => 'YSN',
                    'community' => 'Salmon Arm',
                    'airport' => 'Salmon Arm Airport',
                    'region' => '3',
                    'coordinates' => '50°40′58″N119°13′43″W',
                    'runway' => '1299',
                    'airline' => 'owl',
                    ),
                    37 =>
                    array(
                    'id' => 'YVE',
                    'community' => 'Vernon',
                    'airport' => 'Vernon Regional Airport',
                    'region' => '8',
                    'coordinates' => '50°14′46″N119°19′51″W',
                    'runway' => '1072',
                    'airline' => '',
                    ),
                    38 =>
                    array(
                    'id' => 'YVR',
                    'community' => 'Vancouver',
                    'airport' => 'Vancouver International Airport',
                    'region' => '2',
                    'coordinates' => '49°11′41″N123°11′02″W',
                    'runway' => '3505',
                    'airline' => 'pelican',
                    ),
                    39 =>
                    array(
                    'id' => 'YWL',
                    'community' => 'Williams Lake',
                    'airport' => 'Williams Lake Airport',
                    'region' => '5',
                    'coordinates' => '52°11′00″N122°03′16″W',
                    'runway' => '2134',
                    'airline' => '',
                    ),
                    40 =>
                    array(
                    'id' => 'YXC',
                    'community' => 'Cranbrook',
                    'airport' => 'Cranbrook/Canadian Rockies International Airport',
                    'region' => '4',
                    'coordinates' => '49°36′44″N115°46′55″W',
                    'runway' => '2438',
                    'airline' => 'quail',
                    ),
                    41 =>
                    array(
                    'id' => 'YXJ',
                    'community' => 'Fort St. John',
                    'airport' => 'Fort St. John Airport (North Peace Airport)',
                    'region' => '9',
                    'coordinates' => '56°14′17″N120°44′25″W',
                    'runway' => '2106',
                    'airline' => '',
                    ),
                    42 =>
                    array(
                    'id' => 'YXS',
                    'community' => 'Prince George',
                    'airport' => 'Prince George Airport',
                    'region' => '7',
                    'coordinates' => '53°53′03″N122°40′39″W',
                    'runway' => '3490',
                    'airline' => 'raven',
                    ),
                    43 =>
                    array(
                    'id' => 'YXT',
                    'community' => 'Terrace/Kitimat',
                    'airport' => 'Northwest Regional Airport Terrace-Kitimat (Terrace Airport)',
                    'region' => '6',
                    'coordinates' => '54°28′07″N128°34′42″W',
                    'runway' => '2285',
                    'airline' => 'swallow',
                    ),
                    44 =>
                    array(
                    'id' => 'YXX',
                    'community' => 'Abbotsford',
                    'airport' => 'Abbotsford International Airport',
                    'region' => '2',
                    'coordinates' => '49°01′31″N122°21′38″W',
                    'runway' => '2925',
                    'airline' => 'thrush',
                    ),
                    45 =>
                    array(
                    'id' => 'YYD',
                    'community' => 'Smithers',
                    'airport' => 'Smithers Airport',
                    'region' => '6',
                    'coordinates' => '54°49′31″N127°10′58″W',
                    'runway' => '2299',
                    'airline' => 'unlikely',
                    ),
                    46 =>
                    array(
                    'id' => 'YYE',
                    'community' => 'Fort Nelson',
                    'airport' => 'Fort Nelson Airport',
                    'region' => '9',
                    'coordinates' => '58°50′11″N122°35′49″W',
                    'runway' => '1951',
                    'airline' => 'vulture',
                    ),
                    47 =>
                    array(
                    'id' => 'YYF',
                    'community' => 'Penticton',
                    'airport' => 'Penticton Regional Airport',
                    'region' => '8',
                    'coordinates' => '49°27′45″N119°36′08″W',
                    'runway' => '1829',
                    'airline' => 'warbler',
                    ),
                    48 =>
                    array(
                    'id' => 'YYJ',
                    'community' => 'Victoria',
                    'airport' => 'Victoria International Airport',
                    'region' => '1',
                    'coordinates' => '48°38′49″N123°25′33″W',
                    'runway' => '2133',
                    'airline' => 'xwing',
                    ),
                    49 =>
                    array(
                    'id' => 'YZP',
                    'community' => 'Sandspit',
                    'airport' => 'Sandspit Airport',
                    'region' => '6',
                    'coordinates' => '53°15′15″N131°48′50″W',
                    'runway' => '1558',
                    'airline' => '',
                    ),
                    50 =>
                    array(
                    'id' => 'YZT',
                    'community' => 'Port Hardy',
                    'airport' => 'Port Hardy Airport',
                    'region' => '1',
                    'coordinates' => '50°40′50″N127°22′00″W',
                    'runway' => '1524',
                    'airline' => '',
                    ),
                    51 =>
                    array(
                    'id' => 'YZY',
                    'community' => 'Mackenzie',
                    'airport' => 'Mackenzie Airport',
                    'region' => '7',
                    'coordinates' => '55°17′58″N123°08′00″W',
                    'runway' => '1534',
                    'airline' => 'yellowhammer',
                    ),
                    52 =>
                    array(
                    'id' => 'ZEL',
                    'community' => 'Bella Bella',
                    'airport' => 'Denny Island Aerodrome',
                    'region' => '5',
                    'coordinates' => '52°08′23″N128°03′49″W',
                    'runway' => '900',
                    'airline' => '',
                    ),
                    53 =>
                    array(
                    'id' => 'ZGF',
                    'community' => 'Grand Forks',
                    'airport' => 'Grand Forks Airport',
                    'region' => '8',
                    'coordinates' => '49°00′56″N118°25′50″W',
                    'runway' => '1314',
                    'airline' => '',
                    ),
                    54 =>
                    array(
                    'id' => 'ZMH',
                    'community' => '108 Mile Ranch',
                    'airport' => 'South Cariboo Regional Airport (108 Mile Ranch Airport)',
                    'region' => '3',
                    'coordinates' => '51°44′10″N121°19′58″W',
                    'runway' => '1613',
                    'airline' => 'zipper',
                    ),
                    55 =>
                    array(
                    'id' => 'ZMT',
                    'community' => 'Masset',
                    'airport' => 'Masset Airport',
                    'region' => '6',
                    'coordinates' => '54°01′38″N132°07′30″W',
                    'runway' => '1501',
                    'airline' => '',
                    ),
                    56 =>
                    array(
                    'id' => 'ZST',
                    'community' => 'Stewart',
                    'airport' => 'Stewart Aerodrome',
                    'region' => '6',
                    'coordinates' => '55°56′00″N129°59′00″W',
                    'runway' => '1189',
                    'airline' => '',
                    )
        );


    public function __construct(){
        parent::__construct();

        // inject each "record" key into the record itself, for ease of presentation
        foreach ($this->airports as $key => $record)
        {
            $record['key'] = $key;
            $this->airports[$key] = $record;
        }
    }

    // retrieve a single quote, null if not found
    public function get($which) {
        return !isset($this->airports[$which]) ? null : $this->airports[$which];
    }

    // retrieve all of the quotes
    public function all(){
        return $this->airports;
    }
}
