<?php

function __autoload($class_name){
    require 'autoload/'.$class_name.'.php';
    
}



$person = new Person('Raj Kumar');
echo $person->get_name();

$friend = new Friend('Deepak', 'jai sri ram');
echo $friend->get_name();
echo $friend->get_message();

$bike = new Bike('Yamaha', 'BRO- 99997');
echo $bike->get_bike_data();


echo $v_person;

if(isset($v_person)){
    echo $v_person;
    echo '<br />';
}

if(isset($v_friend)){
    echo $v_friend;
    echo '<br />';

}

if(isset($v_bike)){
    echo $v_bike;
    echo '<br />';

}
?>
