<?php
class Student
{
    var $name;
    var $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}
$student = new Student("Li Lei", 20);
var_dump((array)$student);
// array(2) {
//     ["name"]=>
//     string(6) "Li Lei"
//     ["age"]=>
//     int(20)
//   }