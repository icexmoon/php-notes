<?php
$number = 10;
var_dump((object)$number);
// object(stdClass)#1 (1) {
//     ["scalar"]=>
//     int(10)
//   }
$student = array("name"=>"Li Lei","age"=>20);
$obj = (object)$student;
var_dump($obj);
// object(stdClass)#1 (2) {
//     ["name"]=>
//     string(6) "Li Lei"
//     ["age"]=>
//     int(20)
//   }