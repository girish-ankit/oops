<?php
namespace Database;

class DBController {

    public $database_name;

    function __construct($n) {
        $this->database_name = $n;
    }

}

function print_database_name($objDBController) {
    echo $objDBController->database_name.'<br />';
}
 
 
?>
