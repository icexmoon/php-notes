<?php
function print_var($var)
{
    echo $var . PHP_EOL;
}
print_var(PHP_VERSION); //PHP版本
// 8.1.0
print_var(PHP_OS); //当前操作系统
// WINNT
print_var(PHP_OS_FAMILY); //操作系统家族
// Windows
print_var(PHP_INT_MAX); //当前硬件平台支持的最大整形
// 9223372036854775807
print_var(PHP_BINARY); //php的二进制执行文件路径
// D:\software\Coding\php-8.1.0-nts-Win32-vs16-x64\php.exe

