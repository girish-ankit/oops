<?php
$v_friend = 'sushant';
class Friend extends Person{
    private $message;
    
    function __construct($n, $m){
        parent:: __construct($n);
        $this->message = $m;
        
    }
    
    public function get_message(){
        return '<b>'.$this->name.'</b> say\'s <b>'.$this->message.'</b><br />';
    }
}
?>
