<?php
$str = "Hello World!";
$str[0] = "h";
echo $str.PHP_EOL;
// hello World!
echo $str[strlen("Hello ")].PHP_EOL;
// W
$str = "你好";
$str[0] = "h";
echo $str.PHP_EOL;
// h��好
$str = "你好";
$str = str_replace('你','h',$str);
echo $str.PHP_EOL;
// h好
$str = "Hello World!";
echo strlen($str).PHP_EOL;
$str[15] = 'E';
var_dump($str);
// 12
// string(16) "Hello World!   E"
echo "你"."好".PHP_EOL;
// 你好
