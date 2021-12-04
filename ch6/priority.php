<?php
$a = 1 + 2 * 5;
echo $a . PHP_EOL;
// 11
$a = (1 + 2) * 5;
echo $a . PHP_EOL;
// 15
$a = $b = 2;
echo $a.PHP_EOL;
echo $b.PHP_EOL;
// 2
// 2
$a = true ? 0 : true ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 2 (PHP 8.0.0 前可用)
// Fatal error: Unparenthesized `a ? b : c ? d : e` is not supported. 
