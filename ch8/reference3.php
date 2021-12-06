<?php
class Student
{
    public $name = "";
    public $age = 0;
}
$std = new Student;
function change_student_name(Student $std, string $name)
{
    $std->name = $name;
}
change_student_name($std, "Jack Chen");
echo "{$std->name}" . PHP_EOL;
// Jack Chen
