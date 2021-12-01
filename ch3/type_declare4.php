<?php
class Student
{
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}
function findStudent(string $name, array $students): false|Student
{
    foreach ($students as $student) {
        if ($student->name == $name) {
            return $student;
        }
    }
    return false;
}
$students = [new Student("Li Lei", 20), new Student("Han Mei", 15), new Student("Xiao Li", 20)];
var_dump(findStudent("Xiao Li", $students));
// object(Student)#3 (2) {
//     ["name"]=>
//     string(7) "Xiao Li"
//     ["age"]=>
//     int(20)
//   }
var_dump(findStudent("Xiao Hong", $students));
//   bool(false)
  