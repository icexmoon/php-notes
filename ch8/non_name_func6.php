<?php
$a = 100;
$non_name_func = function() use ($a){
    echo "\$a is {$a}".PHP_EOL;
};
$non_name_func();
// $a is 100
