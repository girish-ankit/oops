<?php

/*
 * Demo of inheritance in php
 */

class Person{
    public $name;
    
    public function set_name($n){
     $this->name = $n;   
    }
    
    public function get_name(){
        return $this->name;
    }
}

class Friend extends Person{
    public $message;
    
    public function set_message($m){
        $this->message = $m;
        
    }
    
    public function speak(){
        return $this->message;
    }
}

$friend = new Friend;
$friend->set_name('Ram');
$friend->set_message('how r u ?');

echo 'This name of you friend is <b>'.$friend->get_name().'</b><br />';
echo $friend->get_name().' say\'s <b>'.$friend->speak().'</b>';
//print_r($friend);
?>
