<?php
function print_all(int|float ...$params)
{
    foreach ($params as $val) {
        echo "{$val} ";
    }
    echo PHP_EOL;
}
print_all(1, "2.5", 666, "hello");
// Fatal error: Uncaught TypeError: print_all(): Argument #4 must be of type int|float, string given ...