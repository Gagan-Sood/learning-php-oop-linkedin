<?php

use PartTimeStudent as GlobalPartTimeStudent;
use Student as GlobalStudent;

class Student {
    
    public static $grades = ['Freshman', 'Sophomore', 'Junior', 'Senior'];
    private static $totalStudents = 0;

    public static function moto() {
        return "To learn PHP OOP!";
    }

    public static function count() {
        return self::$totalStudents;
    }

    public static function addStudent() {
        self::$totalStudents++;
    }
}

echo  Student::$grades[0].'<br \>';
echo  Student::moto().'<br \>';

// echo  Student::$totalStudents.'<br \>'; // Error

echo  Student::count().'<br \>';
Student::addStudent();
echo  Student::count().'<br \>';

// Static methods and properties are inherited
class PartTimeStudent extends Student {

}

echo  PartTimeStudent::$grades[0].'<br \>';
echo  PartTimeStudent::moto().'<br \>';

// Changes are shared too in parent class if property defined as static
PartTimeStudent::$grades[] = 'Alumni';
echo implode(', ', Student::$grades).'<br \>';

Student::addStudent();
Student::addStudent(); 
Student::addStudent();
PartTimeStudent::addStudent();

echo PartTimeStudent::count().'<br />';
echo Student::count().'<br />';
?>