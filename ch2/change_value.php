<?php
$student = array(
    "name" => "Li lei",
    "age" => 20,
);
$student["career"] = "student";
$student[] = "male";
var_dump($student);
// array(4) {
//     ["name"]=>
//     string(6) "Li lei"
//     ["age"]=>
//     int(20)
//     ["career"]=>
//     string(7) "student"
//     [0]=>
//     string(4) "male"
//   }