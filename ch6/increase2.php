<?php
$a = 1;
$b = $a + ++$a + $a++;
echo $a.PHP_EOL;
echo $b.PHP_EOL;
// 3
// 6
