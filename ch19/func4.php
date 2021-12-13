<?php
function &increase(int &$a)
{
    $a++;
    return $a;
}
$a = 1;
$b = increase($a);
$b = 9;
echo $a . PHP_EOL;
echo $b . PHP_EOL;
// 2
// 9
