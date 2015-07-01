<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

class Tweet {

    protected $id;
    public $text;

    public function __construct($id, $text) {
        $this->id = $id;
        $this->text = $text;
    }

    // This method called when your object attempt to read property or variable of the class which is inaccessible or unavailable.

    public function __get($property) {

        if (property_exists($this, $property)) {
            return $this->$property;
        } else {
            throw new Exception("<b>GET </b>Variable " . $property . " has not been declared and can not be get. <br />", 1);
        }
    }

    // This method called when object of your class attempts to set value of the property which is really inaccessible or unavailable in your class.


    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        } else {
            throw new Exception("<b>SET </b> Variable " . $property . " has not been declared and can not be get. <br />", 1);
        }
    }

}

$tt = new Tweet(123, 'hello world');

// testing __set magic method

try {


    $tt->text = 'my world'; // 'hello world'
    echo '<br />';
} catch (Exception $e) {

    echo 'Caught exception: ', $e->getMessage(), "\n";
}

try {

    $tt->ankit = 'myname'; // 'hello world'

    echo '<br />';
} catch (Exception $e) {

    echo 'Caught exception: ', $e->getMessage(), "\n";
}

// testing __get magic method

try {


    echo $tt->text;
    echo '<br />';
} catch (Exception $e) {

    echo 'Caught exception: ', $e->getMessage(), "\n";
}

try {

    echo $tt->ankit; // 'hello world'
    echo '<br />';
} catch (Exception $e) {

    echo 'Caught exception: ', $e->getMessage(), "\n";
}
?>