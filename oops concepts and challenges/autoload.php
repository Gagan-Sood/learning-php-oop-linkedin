<?php

function myAutoload($class) {
    if (preg_match('/\A\w+\Z/', $class) && file_exists('classes/'. $class . '.class.php'))
    include 'classes/'. $class . '.class.php';
}

spl_autoload_register('myAutoload');
$bike = new Unicycle;
$bike->brand = 'Trek';
echo $bike->brand;
?>