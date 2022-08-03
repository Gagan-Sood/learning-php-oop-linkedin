<?php
class Beverage {
    public $name;

    public function __construct()
    {
        echo "New Beverage was created.<br/>";
        // self::$instanceCount++;
    }

    public function __clone()
    {
        echo "Existing Beverage was copied.<br/>";
    }
}

$a = new Beverage;
$a->name = 'Coffee';
echo $a->name . "<hr/>";

$b = clone $a;
echo $a->name . "<br/>";
echo $b->name . "<hr/>";

$a->name = 'Tea';
echo $a->name . "<br/>";
echo $b->name . "<hr/>";

?>