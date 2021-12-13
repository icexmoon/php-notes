<?php
$a = 1;
$b = &$a;
$c = 2;
$b = &$c;
echo "$a $b $c" . PHP_EOL;
// 1 2 2
$b = 9;
echo "$a $b $c" . PHP_EOL;
// 1 9 9

