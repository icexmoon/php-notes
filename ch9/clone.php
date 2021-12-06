<?php
require_once "./student.cls.php";
$std = new Student();
$std2 = $std;
$std3 = clone $std;
var_dump($std === $std2);
var_dump($std3 === $std);
// bool(true)
// bool(false)

