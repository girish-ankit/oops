<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
/*
 * how to call parent class constructor thorugh derived class
  */

class Person{
    private $name;
    
    public function __construct($n){
        $this->name = $n;
    }
    
    function get_name(){
        return $this->name;
    }
}

class Friend extends Person{
    private $message;
    
    public function __construct($n, $m) {
        
        parent::__construct($n);
         $this->message = $m;
    }
    
    public function speak(){
        return $this->message;
    }
}

$friend = new Friend('Rakesh', 'Jai shree Ram');

echo 'you friend name is <b>'.$friend->get_name().'</b><br />';
echo $friend->get_name().' say\'s '.$friend->speak();
?>
