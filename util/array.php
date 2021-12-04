<?php
function print_arr(array $arr)
{
    $ls = array();
    $ls[] = '[';
    $index = 0;
    $len = count($arr);
    foreach ($arr as $key => $value) {
        $ls[] = "{$key}:{$value}";
        if ($index < $len - 1) {
            $ls[] = ', ';
        }
        $index++;
    }
    $ls[] = ']';
    echo implode('', $ls) . PHP_EOL;
}