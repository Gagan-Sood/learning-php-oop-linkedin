<?php

class Student {
    var $first_name;
    var $last_name;
    var $country = 'None';

    function say_hello() {
        return "Hello World!";
    }

    function full_name() {
        return $this->first_name .' '. $this->last_name;
    }
}
$student1 = new Student;
$student1->first_name = "Gagan";
$student1->last_name = "Sood";

$student2 = new Student;
$student2->first_name = "Robin";
$student2->last_name = "Das";

echo $student1->full_name() .'<br \>';
echo $student2->full_name() .'<br \>';

echo $student1->say_hello() .'<br \>';
echo $student2->say_hello() .'<br \>';

$class_methods = get_class_methods('Student');
echo 'Class methods:'. implode(', ', $class_methods) .'<br \>';

if (method_exists('Student','say_hello')) {
    echo "Method say_hello exists inside a class";
} else {
    echo "Method say_hello not exists inside a class";
}
?>