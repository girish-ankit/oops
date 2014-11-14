<?php
$v_person = 'ram';
class Person{
    protected $name;
    
    function __construct($n){
        $this->name = $n;
        
    }
    
       
    public function get_name(){
        return '<b>name:</b> '.$this->name.'<br />';
    }
    
}
?>
