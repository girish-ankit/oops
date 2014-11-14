<?php

class Shape{
    
}

class Rectange extends Shape{
    
}

class Box extends Rectange{
    
}

echo '<b>1</b> <br />';
print_r(class_parents( new box()));
echo '<b>2</b> <br />';
print_r(class_parents(Box));
echo '<b>3</b> <br />';
print_r(class_parents('Box'));
?>
