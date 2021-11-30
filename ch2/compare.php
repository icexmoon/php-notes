<?php

/**
 * 如果数组相等，返回true，否则返回false。
 * @param array $arr1 
 * @param array 4arr2
 * @return bool
 */
function array_compare($arr1, $arr2)
{
    $diff1 = array_diff($arr1, $arr2);
    $diff2 = array_diff($arr2, $arr1);
    return empty($diff1) && empty($diff2);
}
$arr1 = array("a", "b", "c");
$arr2 = array("b", "d", "e");
var_dump(array_compare($arr1, $arr2));
// bool(false)
$arr1 = array("a","b","c");
$arr2 = array("b","c","a","e");
var_dump(array_compare($arr1, $arr2));
// bool(false)
$arr1 = array("a","b","c","e");
$arr2 = array("b","c","a");
var_dump(array_compare($arr1, $arr2));
// bool(false)
$arr1 = array("a",7=>"b","c");
$arr2 = array("b","c","a");
var_dump(array_compare($arr1, $arr2));
// bool(true)

