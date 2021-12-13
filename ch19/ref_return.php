<?php
function &test()
{
    $a = 1;
    return $a;
}
$b = &test();
echo $b . PHP_EOL;
$b = 2;
$c = &test();
echo $c . PHP_EOL;
// 1
// 1
