<?php
$isTrue = true;
$isTrue = True;
$isTrue = TRUE;
$zeroNum = 0;
$nonZeroNum = 1;
var_dump((bool)$zeroNum);
// bool(false)
echo '<br/>';
var_dump((bool)$nonZeroNum);
// bool(true)
echo '<br/>';
$emptyStr = '';
$nonEmptyStr = 'abc';
var_dump((bool)$emptyStr);
// bool(false)
echo '<br/>';
var_dump((bool)$nonEmptyStr);
// bool(true)
echo '<br/>';
$emptyArray = array();
$nonEmptyArray = array("1"=>"1");
var_dump((bool)$emptyArray);
// bool(false)
echo '<br/>';
var_dump((bool)$nonEmptyArray);
// bool(true)
echo '<br/>';
$null = null;
var_dump((bool)$null);
// bool(false)
echo '<br/>';
if ($nonEmptyArray){
    echo "array is not empty<br/>";
    // array is not empty
}
if (!empty($nonEmptyArray)){
    echo "array is not empty<br/>";
    // array is not empty
}