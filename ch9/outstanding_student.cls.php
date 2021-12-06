<?php
require_once "./student.cls.php";
//优秀学生
class OutstandingStudent extends Student
{
    public static function get_outstanding_student_sample(): self
    {
        $os = new self;
        $os->name = "sample outstanding student";
        $os->age = 10;
        return $os;
    }
    public static function get_student_sample(): parent
    {
        $std = new parent;
        $std->name = "sample staudent";
        $std->age = 20;
        return $std;
    }
}
