<?php

class Student {
    var $first_name;
    var $last_name;
    var $country = 'None';

    function say_hello() {
        return "Hello World!";
    }
}
$student1 = new Student;
$student1->first_name = "Gagan";
$student1->last_name = "Sood";

$student2 = new Student;
$student2->first_name = "Robin";
$student2->last_name = "Das";

echo $student1->first_name .' '. $student1->last_name .'<br \>';
echo $student2->first_name .' '. $student2->last_name .'<br \>';

echo $student1->say_hello() .'<br \>';
echo $student2->say_hello() .'<br \>';

$class_methods = get_class_methods('Student');
echo 'Class methods:'. implode(', ', $class_methods);

if (method_exists('Student','say_hello')) {
    echo "Method say_hello exists inside a class";
} else {
    echo "Method say_hello not exists inside a class";
}
?>