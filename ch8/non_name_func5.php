<?php
function get_increase_func($step)
{
    return function ($num) use ($step) {
        return $num + $step;
    };
}
$increase_func = get_increase_func(3);
echo $increase_func(6) . PHP_EOL;
// 9

