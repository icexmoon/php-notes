<?php
$array = array(
    "test",
    0 => "test2",
    "key" => "test3",
    "key" => "test4",
);
var_dump($array);
// array(2) {
//     [0]=>
//     string(5) "test2"
//     ["key"]=>
//     string(5) "test4"
//   }
$array = array(
    "a",
    "b",
    6=>"c",
    "d",
    "e",
);
var_dump($array);
// array(5) {
//     [0]=>
//     string(1) "a"
//     [1]=>
//     string(1) "b"
//     [6]=>
//     string(1) "c"
//     [7]=>
//     string(1) "d"
//     [8]=>
//     string(1) "e"
//   }