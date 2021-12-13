<?php
require_once '../util/array2.php';
$a = 1;
$b = 2;
function &test()
{
    global $a, $b;
    $a++;
    $b++;
    return $a;
}
$c = &test();
print_arr([$a, $b, $c]);
$c = &test();
print_arr([$a, $b, $c]);
