<?php
require_once "../util/array.php";
$arr1 = array(1, 2, 3);
$arr2 = $arr1;
$arr2[0] = 99;
print_arr($arr1);
print_arr($arr2);
// [0:1, 1:2, 2:3]
// [0:99, 1:2, 2:3]
