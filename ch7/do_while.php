<?php
$arr = range(1, 20, 2);
$index = 0;
do {
    if (count($arr) == 0) {
        break;
    }
    echo $arr[$index] . ' ';
    $index++;
} while ($index < count($arr));
// 1 3 5 7 9 11 13 15 17 19 

