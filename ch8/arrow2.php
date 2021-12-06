<?php
$a = 100;
$increase_func = fn (int $sep): int => $a + $sep;
echo $increase_func(3) . PHP_EOL;
// 103
