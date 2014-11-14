<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
/*
 * Demo of inheritance in php with protected member
 */

class Person{
    public $name;
    
    protected function set_name($n){
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
    
    // calling protected method  in derived class
    public function set_name_public($n){
        $this->set_name($n);
    }
}

$friend = new Friend;
$friend->set_name_public('Ram');
$friend->set_message('how r u ?');

echo 'This name of you friend is <b>'.$friend->get_name().'</b><br />';
echo $friend->get_name().' say\'s <b>'.$friend->speak().'</b>';
//print_r($friend);
?>
