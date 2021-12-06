<?php
function print_arr(array $arr)
{
    echo convert_array_to_str($arr) . PHP_EOL;
}

function convert_array_to_str(array $arr): string
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
    return implode('', $ls);
}
