<?php
function add_two_str(string $str1, string $str2 = ',second str is empty.'): string
{
    return $str1 . $str2;
}
echo add_two_str("hello", "world") . PHP_EOL;
echo add_two_str("hello") . PHP_EOL;
// helloworld
// hello,second str is empty.
