<?php

/*
 * use of $this in php class
 */

class Person {

    var $name;

    function set_name($date) {
        $this->name = $date;
    }

    function get_name() {
        return $this->name;
    }

}

$person = new Person;
$person->set_name('girish');
print_r($person); die();
echo $person->get_name();

?>
