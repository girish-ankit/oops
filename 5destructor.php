<?php

/*
 * Demo of destructor in php
 * 
 */

 class Person{
     private $name;
     
     function __construct($n){
         echo '<b>Calling constructor...</b> <br />';
         $this->name = $n;
         
     }
     
     public function get_name(){
        return '<b>The name of the persion is </b>'.$this->name.'<br />';
     }
     
     function __destruct(){
         echo '<b>Calling destructor...</b> <br />';
     }
     
     
 }
 
 $person = new Person('ankit');
 echo $person->get_name();
?>
