<?php

/**
 * 以二进制形式打印数字（10位，0填充）
 * @param int $binaryNum
 */
function print_binary(int $binaryNum): void
{
    echo sprintf("%'.010b", $binaryNum) . PHP_EOL;
}
