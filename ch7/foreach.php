<?php
$a = range(1, 10);
foreach ($a as $val) {
    echo "{$val} ";
}
echo PHP_EOL;
// 1 2 3 4 5 6 7 8 9 10 
foreach ($a as $key => $val){
    echo "{$key}:{$val}, ";
}
echo PHP_EOL;
// 0:1, 1:2, 2:3, 3:4, 4:5, 5:6, 6:7, 7:8, 8:9, 9:10, 
