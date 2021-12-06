<?php
require_once "./student.cls.php";
require_once "./outstanding_student.cls.php";
$std = OutstandingStudent::get_student_sample();
$osStd = OutstandingStudent::get_outstanding_student_sample();
var_dump($std instanceof Student);
var_dump($std instanceof OutstandingStudent);
var_dump($osStd instanceof OutstandingStudent);
// bool(true)
// bool(false)
// bool(true)
