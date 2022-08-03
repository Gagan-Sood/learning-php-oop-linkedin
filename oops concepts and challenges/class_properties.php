<?php

class Student {
    var $first_name;
    var $last_name;
    var $country = 'None';
}
$student1 = new Student;
$student1->first_name = "Gagan";
$student1->last_name = "Sood";

$student2 = new Student;
$student2->first_name = "Robin";
$student2->last_name = "Das";

echo $student1->first_name .' '. $student1->last_name .'<br \>';
echo $student2->first_name .' '. $student2->last_name .'<br \>';

$class_vars = get_class_vars('Student');
echo '<pre>';print_r($class_vars);


$object_vars = get_object_vars($student1);
echo '<pre>';print_r($object_vars);

if (property_exists('Student','first_name')) {
    echo "Property first_name exists inside a class";
} else {
    echo "Property first_name not exists inside a class";
}
?>