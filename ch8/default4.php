<?php
function add_two_str(string $str1 = 'first param is empty,', string $str2): string
{
    return $str1 . $str2;
}
echo add_two_str("hello", "world") . PHP_EOL;
echo add_two_str("hello") . PHP_EOL;
// helloworld
// Fatal error: Uncaught ArgumentCountError: Too few arguments to function add_two_str(), 1 passed in ...