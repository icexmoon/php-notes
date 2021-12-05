<?php
$arr = range(1, 20, 2);
$index = 0;
$len = count($arr);
while ($index < $len) {
    echo $arr[$index] . ' ';
    $index++;
}
echo PHP_EOL;
// 1 3 5 7 9 11 13 15 17 19 

