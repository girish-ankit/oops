<?php

/*
 * Demo of constructor in php oops
 */

// NOTE: you can define constructor functon as __consturct() or function having same name as class

class Person{
    private $name, $age;
    
    function __construct($n, $a){
        $this->name = $n;
        $this->age = $a;
    }
    
    public  function set_data($nn, $aa){
        $this->name = $nn;
        $this->age = $aa;
    }
    
    public function get_data(){
        return '<b>name:</b> '.$this->name.' <b>age:</b> '.$this->age.'<br />';
    }
    
}

$person = new Person('ankit', 30);
//print_r($person); die();
echo $person->get_data();

class Bike{
    private $name, $number;
    
    function Bike($name, $number){
        $this->name = $name;
        $this->number = $number;
    }
    
    public function get_data(){
        return '<b>bike name:</b> '.$this->name.' <b>bike number:</b>'.$this->number;
    }
}

$bike = new Bike('Bajaj', 'BR0986');
echo $bike->get_data();
?>
