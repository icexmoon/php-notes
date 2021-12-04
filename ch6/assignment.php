<?php
echo ($a=123).PHP_EOL;
echo $a.PHP_EOL;
// 123
// 123
$a = ($b = 123);
echo $a.PHP_EOL;
echo $b.PHP_EOL;
// 123
// 123
$a = $b = 123;
echo $a.PHP_EOL;
echo $b.PHP_EOL;
// 123
// 123
