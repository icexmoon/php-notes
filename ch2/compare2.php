<?php

/**
 * 如果数组相等，返回true，否则返回false。
 * @param array $arr1 
 * @param array 4arr2
 * @return bool
 */
function array_compare($arr1, $arr2)
{
    return $arr1 == $arr2;
}
$arr1 = array("a","b","c");
$arr2 = array("b","c","a");
var_dump(array_compare($arr1, $arr2));
$arr1 = array("a","b","c");
$arr2 = array("a","b","c");
var_dump(array_compare($arr1, $arr2));
// bool(false)
// bool(true)


