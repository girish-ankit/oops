<?php
namespace Databasenew;

class DBController {

    public $database_name;

    function __construct($n) {
        $this->database_name = $n;
    }
   
    function get_name(){
        return '<b>Databasenew</b> namespace <b>'.$this->database_name.'</b><br />';
    }
}

function print_database_name($objDBController) {
    echo '<b>Databasenew</b> namespace <b>'.$objDBController->database_name.'</b><br />';
}
?>
