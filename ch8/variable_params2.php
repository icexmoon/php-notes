<?php
function print_all($first, ...$params)
{
    echo "first param:{$first}" . PHP_EOL;
    echo "other params:";
    foreach ($params as $val) {
        echo "{$val} ";
    }
    echo PHP_EOL;
}
print_all(1, "2.5", 666);
// first param:1
// other params:2.5 666 
