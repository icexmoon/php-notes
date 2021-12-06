<?php
function print_all(...$params)
{
    foreach ($params as $val) {
        echo "{$val} ";
    }
    echo PHP_EOL;
}
$arr = range(1, 20, 2);
print_all(...$arr);
// 1 3 5 7 9 11 13 15 17 19 
