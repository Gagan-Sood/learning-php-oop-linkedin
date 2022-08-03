<?php

use Bicycle as GlobalBicycle;

class Bicycle {
    public const CATEGORIES = ['Road','Mountain','Hybrid','Cruiser','City','BMX'];
    public $brand;
    public $model;
    public $year;
    private $weight_kg = 0;
    private $weight_lbs = 2.2046226218;
    protected static $wheels = 2;
    public static $instanceCount = 0;
    public $category = '';

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

    public static function create() {
        $className = get_called_class();
        $obj  = new $className;
        // $obj  = new static;   self and static worked here too
        self::$instanceCount++;
        return $obj;
    }

    public static function wheelDetails() {
        $wheelString = static::$wheels == 1 ? "1 wheel" : static::$wheels." wheels";
        return "It has ".$wheelString;
    }
}
class Unicycle extends Bicycle {
    protected static $wheels = 1;
}

$hero_bicycle = new Bicycle;
$hero_bicycle->brand = "HERO";
$hero_bicycle->model = "A1";
$hero_bicycle->year = 2021;
$hero_bicycle->set_weight_kg(10);
$weight_in_lbs = $hero_bicycle->weight_lbs();

$avon_bicycle = new Unicycle;
$avon_bicycle->brand = "AVON";
$avon_bicycle->model = "V4";
$avon_bicycle->year = 2022;
$avon_bicycle->set_weight_kg(15);
$weight_in_lbs = $avon_bicycle->weight_lbs();

echo  'Bicycle count: '. Bicycle::$instanceCount."<br/>";
echo  'Unicycle count: '. Unicycle::$instanceCount."<br/>";

$bike = Bicycle::create();
$uni = Unicycle::create();

echo  'Bicycle count: '. Bicycle::$instanceCount."<br/>";
echo  'Unicycle count: '. Unicycle::$instanceCount."<br/>";

echo "<hr/>";
echo "Categories: ". implode(', ',Bicycle::CATEGORIES)."<br/>";
$hero_bicycle->category = Bicycle::CATEGORIES[0];
echo  'Category: '. $hero_bicycle->category."<br/>";

echo "<hr/>";
echo $hero_bicycle->wheelDetails() . "<br />";
echo $avon_bicycle->wheelDetails() . "<br />";
?>