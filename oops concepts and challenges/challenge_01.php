<?php

class Bicycle {
    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg = 0;
    var $weight_lbs = 2.2046226218;

    function name() {
        return $this->brand .' '. $this->model .' '.$this->year;
    }

    function weight_lbs() {
        return floatval($this->weight_kg) * $this->weight_lbs;
    }

    function set_weight_lbs ($weight_kg) {
        return floatval($weight_kg) / $this->weight_lbs;
    }
}

$hero_bicycle = new Bicycle;
$hero_bicycle->brand = "HERO";
$hero_bicycle->model = "A1";
$hero_bicycle->year = 2021;
$hero_bicycle->description = "It is a Hero brand cycle.";
$hero_bicycle->weight_kg = 10;
$weight_in_lbs = $hero_bicycle->weight_lbs();

// Details of Hero bicycle instance
echo "Bicycle 1 details: <br \>";
echo $hero_bicycle->name() . "<br />";
echo $hero_bicycle->description . "<br />";
echo "Weight in Pounds {$weight_in_lbs} <br />";
echo "Weight in kg ". $hero_bicycle->set_weight_lbs($weight_in_lbs) . "<br />";
echo "<br \><br \>";

$avon_bicycle = new Bicycle;
$avon_bicycle->brand = "AVON";
$avon_bicycle->model = "V4";
$avon_bicycle->year = 2022;
$avon_bicycle->description = "Avon special cycle";
$avon_bicycle->weight_kg = 15;
$weight_in_lbs = $avon_bicycle->weight_lbs();

// Details of Hero bicycle instance
echo "Bicycle 2 details: <br \>";
echo $avon_bicycle->name() . "<br />";
echo $avon_bicycle->description . "<br />";
echo "Weight in Pounds {$weight_in_lbs} <br />";
echo "Weight in kg ". $avon_bicycle->set_weight_lbs($weight_in_lbs) . "<br />";
echo "<br \><br \>";
?>