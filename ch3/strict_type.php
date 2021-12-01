<?php
function add(int $a, int $b): int
{
    return $a + $b;
}
var_dump(add(1,2));
// int(3)
var_dump(add(1.5,2.6));
// int(3)
