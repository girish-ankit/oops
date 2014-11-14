<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
use test\DBController;
use Database\DBController as d;
use Databasenew\DBController as dn;
include('13namespace-file-1.php');
include('13namespace-file-2.php');
include('13namespace-file-3.php');




print '<b>Current name space </b>'.__NAMESPACE__.'<br />'; 

// calling current namespace i.e deffined in this page
$objDBController = new DBController('db_one');
echo $objDBController->get_name();
echo '<br />';
$objDBControllernamesapce = new \Database\DBController('db_two');
\Database\print_database_name($objDBControllernamesapce);
 
echo '<br />';

// How to call namespace class and function
$objDBControllernamesapce = new \Database\DBController('db_two');
\Database\print_database_name($objDBControllernamesapce);
echo '<br />';

// How to call namespace class and function
$objDBControllernamesapce = new \Databasenew\DBController('db_three');
\Databasenew\print_database_name($objDBControllernamesapce);

// calling name space using 'use' keywork. NOTE: with use keyword we can call only class not function and constant
$objDBController = new d('db_one');
echo '<br />';
echo $objDBController->get_name();

$objDBController = new dn('db_one');
echo '<br />';
echo $objDBController->get_name();

?>
