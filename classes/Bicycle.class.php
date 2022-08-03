<?php
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
?>