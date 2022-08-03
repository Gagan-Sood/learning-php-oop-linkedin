<?php

use Bicycle as GlobalBicycle;

class Bicycle {
    public $brand;
    public $model;
    public $year;
    public $description;
    private $weight_kg = 0;
    private $weight_lbs = 2.2046226218;
    protected $wheels = 2;

    public function name() {
        return $this->brand .' '. $this->model .' '.$this->year;
    }

    public function weight_lbs() {
        return floatval($this->weight_kg) * $this->weight_lbs;
    }

    public function set_weight_lbs ($weight_kg) {
        return floatval($weight_kg) / $this->weight_lbs;
    }

    public function set_weight_kg ($weight) {
        $this->weight_kg = $weight;
    }

    public function get_weight_kg () {
        return $this->weight_kg.' kg';
    }

    public function wheelDetails() {
        $wheelString = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
        return "It has ".$wheelString;
    }
}

class Unicycle extends Bicycle {
    protected $wheels = 1;

    public function bugTest() {
        return $this->weight_kg;
    }
}

$hero_bicycle = new Bicycle;
$hero_bicycle->brand = "HERO";
$hero_bicycle->model = "A1";
$hero_bicycle->year = 2021;
$hero_bicycle->description = "It is a Hero brand cycle.";
$hero_bicycle->set_weight_kg(10);
$weight_in_lbs = $hero_bicycle->weight_lbs();

// Details of Hero bicycle instance
echo "Bicycle 1 details: <br \>";
echo $hero_bicycle->name() . "<br />";
echo $hero_bicycle->description . "<br />";
echo "Weight in Pounds {$weight_in_lbs} <br />";
echo "Weight in ". $hero_bicycle->get_weight_kg() . "<br />";
echo $hero_bicycle->wheelDetails() . "<br />";
echo "<br \><br \>";

$avon_bicycle = new Unicycle;
$avon_bicycle->brand = "AVON";
$avon_bicycle->model = "V4";
$avon_bicycle->year = 2022;
$avon_bicycle->description = "Avon special cycle";
$avon_bicycle->set_weight_kg(15);
$weight_in_lbs = $avon_bicycle->weight_lbs();

// Details of Hero bicycle instance
echo "Bicycle 2 details: <br \>";
echo $avon_bicycle->name() . "<br />";
echo $avon_bicycle->description . "<br />";
echo "Weight in Pounds {$weight_in_lbs} <br />";
echo "Weight in ". $avon_bicycle->get_weight_kg() . "<br />";
echo $avon_bicycle->wheelDetails() . "<br />";
echo "<br \><br \>";
// echo $avon_bicycle->bugTest() . "<br />"; Undifined property error
?>