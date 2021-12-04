<?php
$a = 1;
$b = 5;
echo ($a / $b) . PHP_EOL;
// 0.2
$a = 6;
$b = 2;
echo ($a / $b) . PHP_EOL;
// 3
$a = 7.5;
$b = 2.2;
echo ($a % $b) . PHP_EOL;
// Deprecated: Implicit conversion from float 7.5 to int loses precision in ...
// Deprecated: Implicit conversion from float 2.2 to int loses precision in ...
// 1
$a = -7;
$b = 2;
echo ($a % $b) . PHP_EOL;
// -1
$a = 7;
$b = -2;
echo ($a % $b) . PHP_EOL;
// 1