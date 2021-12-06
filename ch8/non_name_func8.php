<?php
class Student
{
    public $name;
    public $age;
    public function get_printer(): callable
    {
        return function () {
            echo "Student(name:{$this->name}, age:{$this->age})" . PHP_EOL;
        };
    }
}
$std = new Student;
$std->name = "Jack Chen";
$std->age = 20;
$printer = $std->get_printer();
$printer();
// Student(name:Jack Chen, age:20)
