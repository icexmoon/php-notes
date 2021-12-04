<?php
$number = 0;

function use_global(){
    global $number;
    echo $number.PHP_EOL;
    // 0
    $number++;
}
use_global();
echo $number.PHP_EOL;
// 1