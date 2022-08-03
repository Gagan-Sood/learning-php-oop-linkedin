<?php

class Furniture {
    var $height;
    var $width;
    var $length;
    var $weight = 0;
    var $isSeating = false;
    var $isSleeper = false;
    var $isUpholstered = false;

    function getDimensions() {
        return $this->length ."x". $this->width ."x". $this->height;
    }

    function area() {
        return floatval($this->width) * floatval($this->length);
    }

    function volume() {
        return $this->area() * floatval($this->height);
    }
}

class Bed extends Furniture {
    var $isSleeper = true;
}

class Sofa extends Furniture {
    var $isSleeper = false;
    var $isUpholstered = true;

    var $seats = 3;
    var $hasSeatCushions = true;
    var $hasBackCushions = true;
    var $arms = 2;
    var $depthOpened;

    function areaOpened() {
        if (!$this->isSleeper) {
            return $this->area();
        } else {
            return floatval($this->width) * floatval($this->depthOpened);
        }
    }
}

class Couch extends Sofa {
    var $arms = 0;
}

class LoveSeat extends Sofa {
    var $seats = 2;
}

class Bench extends Couch {
    var $hasBackCushions = false;
}

function inspect_class ($className) {
    $output = '';

    $output .= $className;
    $parentClass = get_parent_class($className);
    if ($parentClass != '') {
        $output .= " extends {$parentClass}";
    }
    $output .= "\n";

    $classVars = get_class_vars($className);
    ksort($classVars);
    $output .= "Properties: \n";
    foreach ($classVars as $key => $value) {
        $output .= "-{$key}: {$value} \n";
    }

    $classMethods = get_class_methods($className);
    sort($classMethods);
    $output .= "Methods: \n";
    foreach ($classMethods as $value) {
        $output .= "-{$value} \n";
    }

    return $output;
}

$classNames = ['Furniture', 'Bed', 'Couch', 'Sofa', 'LoveSeat', 'Bench'];
foreach ($classNames as $className) {
    echo  nl2br(inspect_class($className))."<br />";
}

echo "<hr />";

$sofa = new Sofa;
$sofa->width = 4;
$sofa->height = 2;
$sofa->length = 3;
echo "Area : " . $sofa->area() . "<br />";
echo "Volume : " . $sofa->volume() . "<br />";
echo "Area opened : " . $sofa->areaOpened() . "<br />";
$sofa->isSleeper = true;
$sofa->depthOpened = 7;
echo "Area opened : " . $sofa->areaOpened() . "<br />";
?>