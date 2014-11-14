<?php
//error_reporting(E_ALL);
//ini_set('display_errors', TRUE);
//ini_set('dispaly_startup_errors', TRUE);

class Person{
    private $name;
    
    protected function set_name($n){
        $this->name = $n;
    }
    
    protected function get_name(){
        return $this->name;
    }
            
}

class Friend extends Person{
    public $message;
    
    public function set_message($m){
        $this->message = $m;
    }
    
    public function get_message(){
        return $this->message;
    }
    
    public function set_name_public($n){
        Person::set_name($n);
    }
    
    public function get_name_public(){
        return Person::get_name();
    }
}

$friend = new Friend;
$friend->set_name_public('Rajesh');
$friend->set_message('Hi how do you do ?');

echo 'The name of your friend is: <b>'.$friend->get_name_public().'</b><br />';
echo $friend->get_name_public().' say\'s '.$friend->get_message();
?>
