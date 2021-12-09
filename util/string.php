<?php

/**
 * 用大写字母分割字符串
 */
function split_with_upper(string $str): array
{
    $begin = 0;
    $end = 0;
    $chs = str_split($str);
    $words = array();
    foreach ($chs as $key => $val) {
        if (is_upper($val)) {
            if ($key == 0) {
                continue;
            }
            $end = $key - 1;
            $words[] = substr($str, $begin, $end - $begin + 1);
            $begin = $end + 1;
        }
    }
    $end = count($chs) - 1;
    $words[] = substr($str, $begin, $end - $begin + 1);
    return $words;
}

/**
 * 判断是否大写字母
 */
function is_upper(string $ch): bool
{
    $asc = ord($ch);
    return $asc >= 65 && $asc <= 90;
}

// function main()
// {
//     $arr = split_with_upper("ssKsdfsH");
//     var_dump($arr);
// }

// main();
