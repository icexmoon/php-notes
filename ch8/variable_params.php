<?php
function print_all(...$params)
{
    foreach ($params as $val) {
        echo "{$val} ";
    }
    echo PHP_EOL;
}
print_all(1, "2.5", 666);
// 1 2.5 666 
