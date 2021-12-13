<?php
$a = 1;
$b = &$a;
unset($b);
echo $a . PHP_EOL;
// 1
echo $b . PHP_EOL;
// Warning: Undefined variable $b in ...