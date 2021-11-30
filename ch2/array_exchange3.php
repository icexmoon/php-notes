<?php
class Student
{
    private $name;
    protected $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}
$student = new Student("Li Lei", 20);
var_dump((array)$student);
// array(2) {
//     ["Studentname"]=>
//     string(6) "Li Lei"
//     ["*age"]=>
//     int(20)
//   }
var_export((array)$student);
// array (
//     '' . "\0" . 'Student' . "\0" . 'name' => 'Li Lei',
//     '' . "\0" . '*' . "\0" . 'age' => 20,
//   )