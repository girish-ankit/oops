<?php

// In php oops by default all properites and methods are public
/*
 * Person class definition
 */
class Person {

    var $name;

    function set_name($data) {
        global $name;
        $name = $data;
    }

    function get_name() {
        global $name;
        return $name;
    }

}

// Object or instance creation

$person = new Person;

$person->set_name('raj Kiran');
print_r($person); die();
echo $person->get_name();
?>