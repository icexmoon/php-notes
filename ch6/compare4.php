<?php
class Student
{
    public $name = "";
    public $age = 0;
}
/**
 * 比较两个student的大小
 * @param Student $std1
 * @param Student $std2
 * @return int 如果std1大于std2，返回值大于0，如果...
 */
function compare_student(Student $std1, Student $std2): int
{
    return $std1->age <=> $std2->age;
}
$std1 = new Student;
$std2 = new Student;
$std1->age = 20;
$std2->age = 15;
var_dump(compare_student($std1, $std2));
// int(1)

