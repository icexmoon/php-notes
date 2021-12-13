<?php
$a = 1;
$b = &$a;
$b = 9;
echo $a . PHP_EOL;
echo $b . PHP_EOL;
// 9
// 9
$d = &$c;
var_dump($d);
var_dump($c);
// NULL
// NULL
function get_null_ref(&$param)
{
    var_dump($param);
    // NULL
}
get_null_ref($e);
var_dump($e);
// NULL
