<?php
namespace test;
class DBController {

    public $database_name;

    function __construct($n) {
        $this->database_name = $n;
    }
    
    function get_name(){
        return '<b>Test</b> namespace <b>'.$this->database_name.'</b><br />';
    }

}

function print_database_name($objDBController) {
    echo 'Test namespace '.$objDBController->database_name.'<br />';
}
?>
