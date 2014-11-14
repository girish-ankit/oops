<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
/*
 * demo of access modifier (public, private and protected)
 */

// Public properties and methods

class Person {

    public $name;

    public function set_name($data) {
        $this->name = $data;
    }

    public function get_name() {
        return $this->name;
    }

}

$person = new Person;
$person->set_name('shali bhai');
print_r($person); 
echo $person->name . "<br />";

// Private properties and methods

class Bike {

    private $name;

    public function set_name($data) {
        $this->name = $data;
    }

    public function get_name() {
        return $this->name;
    }

}

$mybike = new Bike;
$mybike->set_name('Hero Honda');
print_r($mybike); die();
echo $mybike->get_name() . "<br />";
// you can't access private members(properites and members of a class)
echo $mybike->name . "<br />";
?>
