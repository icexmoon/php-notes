<?php
$a = 1;
$arr = [&$a, 2, 3];
$arr2 = $arr;
$arr2[0] = 9;
$arr2[1] = 9;
require_once '../util/array.php';
print_arr($arr);
print_arr($arr2);