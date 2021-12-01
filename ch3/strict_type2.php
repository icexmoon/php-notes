<?php
declare(strict_types=1);
function add(int $a, int $b): int
{
    return $a + $b;
}
var_dump(add(1,2));
// int(3)
var_dump(add(1.5,2.6));
// Fatal error: Uncaught TypeError: add(): Argument #1 ($a) must be of type int, float given,