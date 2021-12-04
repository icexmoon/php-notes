<?php
$number = 0;

function use_global(){
    echo $number.PHP_EOL;
    // Warning: Undefined variable $number in
    $number++;
    // Warning: Undefined variable $number in
}
use_global();
echo $number.PHP_EOL;
// 0