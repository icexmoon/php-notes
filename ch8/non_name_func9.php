<?php
class Student
{
    public $name;
    public $age;
    public function get_printer(): callable
    {
        return static function () {
            echo "Student(name:{$this->name}, age:{$this->age})" . PHP_EOL;
            // Fatal error: Uncaught Error: Using $this when not in object context in ... 
        };
    }
}
$std = new Student;
$std->name = "Jack Chen";
$std->age = 20;
$printer = $std->get_printer();
$printer();
// Student(name:Jack Chen, age:20)
