<?php
$array = array(
    0 => 'val1',
    7 => 'val2',
    "key1" => 'val3',
    "key2" => 'val4',
);
var_dump(array_keys($array));
// array(4) {
//     [0]=>
//     int(0)
//     [1]=>
//     int(7)
//     [2]=>
//     string(4) "key1"
//     [3]=>
//     string(4) "key2"
//   }