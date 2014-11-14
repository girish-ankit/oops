<?php

class Toys {

    private $str;

    // __set() – triggered while initializing overloaded properties.
    public function __set($name, $value) {
        $this->str[$name] = $value;
    }

    //__get() – triggered while using overloaded properties with PHP print statements.
    public function __get($name) {
        echo "Overloaded Property name = " . $this->str[$name] . "<br/>";
    }

    // __isset() – This magic method is invoked when we check overloaded properties with isset() function
    public function __isset($name) {
        if (isset($this->str[$name])) {
            echo "Property \$$name is set.<br/>";
        } else {
            echo "Property \$$name is not set.<br/>";
        }
    }

  // __unset() – Similarly, this function will be invoked on using PHP unset() for overloaded properties
    public function __unset($name) {
        unset($this->str[$name]);
        echo "\$$name is unset <br/>";
    }

    // __call() – triggered while invoking overloaded methods in object context.
    public function __call($name, $param) {
        echo "Magic method invoked while method overloading with object reference<br/>";
    }

     // __callStatic() – triggered while invoking overloaded methods in static context
    public static function __callStatic($name, $param) {
        echo "Magic method invoked while method overloading with static access<br/>";
    }

}

$objToys = new Toys;
/* setters and getters on dynamic properties */
$objToys->overloaded_property = "new";
echo $objToys->overloaded_property . "\n\n";
/* Operations with dynamic properties values */
isset($objToys->overloaded_property);
unset($objToys->overloaded_property);
isset($objToys->overloaded_property);
echo '<br /><br />';
$objToys->overloaded_method();
Toys::overloaded_property();
?>