<?php
$v_bike = 'hero honda';
class Bike{
    private $bike_name, $bike_number;
    
    function __construct($bname,$bnumber) {
        $this->bike_name = $bname;
        $this->bike_number = $bnumber;
                
    }
    
    function get_bike_data(){
        return 'The name of bike is <b>'.$this->bike_name.'</b> and number is <b>'.$this->bike_number.'</b>';
    }
}
?>
