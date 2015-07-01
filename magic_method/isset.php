<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

class Tweet {

    protected $id;
    public $text;

    public function __construct($id, $text) {
        $this->id = $id;
        $this->text = $text;
    }

    public function __isset($property) {
       return 'isset function is called';
    }

}

$tt = new Tweet(123, 'hello world');


echo isset($tt->text);
?>