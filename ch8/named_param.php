<?php
function my_map(callable $func, iterable &$iter)
{
    foreach ($iter as &$val) {
        $func($val);
    }
    unset($val);
}
function my_double(int &$num)
{
    $num = $num * 2;
}
$arr = range(1, 10);
my_map(iter: $arr, func: "my_double");
require_once "../util/array.php";
print_arr($arr);
// [0:2, 1:4, 2:6, 3:8, 4:10, 5:12, 6:14, 7:16, 8:18, 9:20]

