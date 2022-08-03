<?php
class Student {
    public $first_name;
    public $last_name;
    public $country = 'None';

    protected $registrationId;
    private $tution = 500;

    public function hello_world() {
        return "Hello World!";
    }

    protected function hello_family() {
        return "Hello Family!";
    }

    private function hello_me() {
        return "Hello Me!";
    }

    public function full_name() {
        return $this->first_name .' '. $this->last_name;
    }

    public function tution_fmt() {
        return "$". $this->tution;
    }
}

class PartTimeStudent extends Student {
    public function hello_parent() {
        return $this->hello_family();
    }
}

$student1 = new PartTimeStudent;
$student1->first_name = "Gagan";
$student1->last_name = "Sood";

echo $student1->full_name() .'<br \>';
echo $student1->hello_world() .'<br \>';
echo $student1->hello_parent() .'<br \>';
// echo $student1->hello_Me() .'<br \>';
// echo $student1->registrationId;
$student1->tution = 1000;
echo $student1->tution .'<br \>';
echo $student1->tution_fmt() .'<br \>';
?>