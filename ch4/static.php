<?php
function use_static(){
    static $number;
    $number++;
    echo $number.PHP_EOL;
}
use_static();
// 1
use_static();
// 2
echo $number.PHP_EOL;
// Warning: Undefined variable $number in ...



