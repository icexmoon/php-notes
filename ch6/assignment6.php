<?php
class Student{
    public $name;
    public $age;
}
$std = new Student;
$std->name = 'Jack Chen';
$std->age = 20;
$std2 = $std;
$std2->name = 'Brus Lee';
echo "name:{$std->name}".PHP_EOL;
echo "name:{$std2->name}".PHP_EOL;