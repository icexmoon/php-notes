<?php
$arr1 = range(1, 10);
$arr2 = range(1, 20, 2);
require_once '../util/array.php';
foreach ($arr1 as &$val) {
    $val += 1;
}
foreach ($arr2 as $key => $val) {
    $arr2[$key] = $val * 2;
}
print_arr($arr1);
print_arr($arr2);
// [0:2, 1:3, 2:4, 3:5, 4:6, 5:7, 6:8, 7:9, 8:10, 9:19]
// [0:2, 1:6, 2:10, 3:14, 4:18, 5:22, 6:26, 7:30, 8:34, 9:38]

