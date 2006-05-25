<?php
// $Id$
class Test
{
    static $livesearch = array(
                                1 => 'Orange',
                                2 => 'Apple',
                                3 => 'Pear',
                                4 => 'Banana',
                                5 => 'Blueberry'
                                );
    static $livesearch2 = array(
                                1 => 'Orange-2',
                                2 => 'Apple-2',
                                3 => 'Pear-2',
                                4 => 'Banana-2',
                                5 => 'Blueberry-2'
                                );
    function getTestName($dbh, $id) {
        if ($id > 0) {
            return self::$livesearch[$id];
        }
    }

    function getTestName2($dbh, $id) {
        if ($id > 0) {
            return self::$livesearch2[$id];
        }
    }
}
?>