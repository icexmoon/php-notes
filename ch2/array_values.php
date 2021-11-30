<?php
$array = array("a", "b", "c", "d");
unset($array[3]);
unset($array[2]);
$array[] = "e";
$array = array_values($array);
var_dump($array);
// array(3) {
//     [0]=>
//     string(1) "a"
//     [1]=>
//     string(1) "b"
//     [2]=>
//     string(1) "e"
//   }
$student = array("name" => "Li Lei", "age" => 20);
$studentVals = array_values($student);
var_dump($studentVals);
// array(2) {
//     [0]=>
//     string(6) "Li Lei"
//     [1]=>
//     int(20)
//   }