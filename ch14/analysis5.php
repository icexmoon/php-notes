<?php

namespace xyz\icexmoon\php_notes\ch14;

function intval(array $arr): int
{
    $total = 0;
    foreach ($arr as $val) {
        $total += \intval($val);
    }
    return $total;
}
echo intval([1, 2, 3]) . PHP_EOL;
echo \intval("123") . PHP_EOL;
// 6
// 123
