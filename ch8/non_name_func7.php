<?php
$a = 100;
$non_name_func = function () use (&$a) {
    $a = $a * 2;
};
$non_name_func();
echo "\$a is {$a}" . PHP_EOL;
// $a is 200

