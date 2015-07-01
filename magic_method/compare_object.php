<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_error', TRUE);

class foo {

    public function __construct() {
        $this->myself = $this;
    }

}

echo '<h1>Assign object without clone key word</h1>';


$wom = new foo();
$tt =  $wom;

echo '<h3>clone object comparison with == operator</h3>';
print (int) ($wom == $tt) . "<br />";
echo '<h3>clone object comparison with === operator</h3>';
print (int) ($wom === $tt) . "<br />";


echo '<h1>Assign object with clone key word</h1>';
$wom = new foo();
$bat = clone $wom;

echo '<h3>clone object comparison with == operator</h3>';
print (int) ($wom == $bat) . "<br />";

echo '<h3>clone object comparison with === operator</h3>';
print (int) ($wom === $bat) . "<br />";
?>