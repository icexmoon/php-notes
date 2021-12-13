<?php
$arr1 = range(1, 10);
$arr2 = range(1, 20, 2);
require_once '../util/array.php';
foreach ($arr1 as &$val) {
    $val += 1;
}
foreach ($arr2 as $key => $val) {
    echo $arr1[9]." ";
    $arr2[$key] = $val * 2;
}
// 1 3 5 7 9 11 13 15 17 19 

