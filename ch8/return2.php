<?php
function multi_return()
{
    return [1, 2, 3];
}
[$first, $second, $third] = multi_return();
echo "{$first},{$second},{$third}" . PHP_EOL;
// 1,2,3
