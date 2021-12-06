<?php
require_once "../util/array.php";
function &return_reference(array &$arr): array
{
    foreach ($arr as &$val) {
        $val = 2 * $val;
    }
    unset($val);
    return $arr;
}
$arr = range(1, 10);
$arr2 = &return_reference($arr);
$arr3 = &return_reference($arr2);
print_arr($arr);
// [0:4, 1:8, 2:12, 3:16, 4:20, 5:24, 6:28, 7:32, 8:36, 9:40]

