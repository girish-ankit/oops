<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

// Simple static properites and method demo
class Math {

    public static $number;
    public static $result;

    function say_hi() {
        echo 'hii';
    }

    public static function set_data($n) {
        self::$number = $n;
    }

    public static function square_result() {
        self::$result = self::$number * self::$number;
        echo self::$number . ' <sup>2</sup> = ' . self::$result . '<br />';
    }

}

// Demo of static properites and methods
echo Math::say_hi() . '<br />';
Math::set_data(2);
echo '<b>The number enter by you: </b>' . Math::$number . '<br />';
echo Math::square_result();

// You can also access static properites and methods by creating object of that class
$math = new Math;
$math->set_data(6);
echo $math->square_result();



// static members in inheritance

class Bike {

    public static $bike_name;

    public static function set_name($n) {
        self::$bike_name = $n;
    }

}

class Herohonda {

    public static $message;

    public static function set_message($m) {
        self::$message = $m;
    }

    public static function set_name_public($n) {
        Bike::set_name($n);
    }

    public static function get_message() {
        echo 'This bike name is <b>' . Bike::$bike_name . '</b> and message is <b>' . Herohonda::$message . '</b>';
    }

}

Herohonda::set_name_public('splendor');
Herohonda::set_message('Karo lo duniya mutthi me..');
echo Herohonda::get_message();
?>
