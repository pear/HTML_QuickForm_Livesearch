<?php
// $Id$
class Test
{
    var $livesearch = array();
    var $livesearch2 = array();
    function Test() {
        $this->livesearch2 = array(
                                1 => 'Orange-2',
                                2 => 'Apple-2',
                                3 => 'Pear-2',
                                4 => 'Banana-2',
                                5 => 'Blueberry-2'
                                );
        $this->livesearch = array(
                                1 => 'Orange',
                                2 => 'Apple',
                                3 => 'Pear',
                                4 => 'Banana',
                                5 => 'Blueberry'
                                );
    }
    function getTestName($dbh, $id) {
        if ($id > 0) {
            return $this->livesearch[$id];
        }
    }

    function getTestName2($dbh, $id) {
        if ($id > 0) {
            return $this->livesearch2[$id];
        }
    }
}
?>