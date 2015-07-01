<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

class Animal {

    public $dogName;

    function __construct($name) {
        $this->dogName = $name;
    }

    function __clone() {
        echo 'cloning is going on <br />';
        $this->dogName .= '++';
    }

}

echo '<h2>Copy object without clone() function</h2>';

$animal = new Animal("xuz");
echo '<b>Intial value: </b>' . $animal->dogName;
echo '<br />';

// assign object to a variable

$test = $animal;
$test->dogName = 'mno';

echo '<b>Value in after assignment operator: </b>' . $animal->dogName;
echo '<br />';

/** In PHP, objects are always handled as references. 
 * This means that when you pass an object into a function, any changes you make to it in there are reflected outside the function
 * @param object $a
 */
function change_name($a) {
    echo '<b>Value in side function: </b>' . $a->dogName;
    echo '<br />';
    $a->dogName = 'abc';
}

change_name($animal);

echo '<b>Value in after function call: </b>' . $animal->dogName;
echo '<br />';
print_r($animal);


########################################## IMPORTANT ##########################################
//Sometimes it is important to only work on copies of objects - 
//you might not want to affect the state of the original. To do this,
//we use the built-in keyword "clone", which performs a complete copy of the object

echo '<h2>Copy object using clone() function</h2>';

$animal = new Animal("xuz");
echo '<b>Intial value: </b>' . $animal->dogName;
echo '<br />';

// assign object to a variable

$test = clone $animal;
//$test->dogName = 'mno';

echo '<b>Value in after assignment operator: </b>' . $animal->dogName . '/' . $test->dogName;
echo '<br />';

/** In PHP, objects are always handled as references. 
 * This means that when you pass an object into a function, any changes you make to it in there are reflected outside the function
 * @param object $a
 */
function clone_change_name($a) {
    echo '<b>Value in side function: </b>' . $a->dogName;
    echo '<br />';
    $a->dogName = 'abc';
}

clone_change_name(clone $test);

echo '<b>Value in after function call: </b>' . $animal->dogName;
echo '<br />';
print_r($animal);

// For really advanced functionality, you can also call parent::__clone() 
// to work your way up the inheritance chain and call the __clone() function of the parent class.

abstract class dog {

    public function __clone() {
        echo "1. In dog clone <br />";
    }

}

class poodle extends dog {

    public $Name;

    public function __clone() {
        echo "<br /> 2. In poodle clone <br />";
        parent::__clone();
    }

}

$poppy = new poodle();
$poppy->Name = "Poppy";

$rover = clone $poppy;
?>