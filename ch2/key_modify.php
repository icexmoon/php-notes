<?php
$array = array("a","b","c","d");
unset($array[3]);
unset($array[2]);
var_dump($array);
$array[] = "e";
var_dump($array);
// array(2) {
//     [0]=>
//     string(1) "a"
//     [1]=>
//     string(1) "b"
//   }
//   array(3) {
//     [0]=>
//     string(1) "a"
//     [1]=>
//     string(1) "b"
//     [4]=>
//     string(1) "e"
//   }