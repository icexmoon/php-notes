<?php
[$a, $b, $c] = [1, 2, 3];
$arr = [&$a, &$b, &$c];
foreach ($arr as &$val) {
    $val = 9;
}
unset($val);
require_once '../util/array.php';
print_arr($arr);
print_arr([$a, $b, $c]);
// [0:9, 1:9, 2:9]
// [0:9, 1:9, 2:9]

