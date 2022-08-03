<?php
class Sofa {
    public static $instanceCount = 0;

    public $seats = 3;
    public $arms = 2;

    public function __construct($args = [])
    {
        self::$instanceCount++;
        $this->seats = $args['seats'] ?? $this->seats;
        $this->arms = $args['arms'] ?? $this->arms;
    }
}

class Couch extends Sofa {
    var $arms = 0;
}

class Loveseat extends Sofa {
    var $seats = 2;
}

$sofa = new Sofa(['seats' => 3, 'arms' =>2]);
echo "Sofa <br/>";
echo "-seats: " . $sofa->seats . "<br/>";
echo "-arms: " . $sofa->arms . "<br/><hr/>";

$couch = new Couch(['seats' => 3, 'arms' =>1]);
echo "Couch <br/>";
echo "-seats: " . $couch->seats . "<br/>";
echo "-arms: " . $couch->arms . "<br/><hr/>";

$loveseat = new Loveseat(['seats' => 2, 'arms' =>2]);
echo "Loveseat <br/>";
echo "-seats: " . $loveseat->seats . "<br/>";
echo "-arms: " . $loveseat->arms . "<br/><hr/>";

echo "Instance count: ". Sofa::$instanceCount;
?>