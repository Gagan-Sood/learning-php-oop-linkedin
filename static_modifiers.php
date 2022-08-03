<?php

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

?>