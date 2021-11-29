<?php
$str = 'hello world';
$str2 = 'I\'m fine';
$str3 = 'http:\\\\www.baidu.com';
var_dump($str);
// string(11) "hello world"
var_dump($str2);
// string(8) "I'm fine"
var_dump($str3);
// string(20) "http:\\www.baidu.com"
$header = "name\t\tage\n";
$lines = array();
$lines[] = "Li Lei\t\t20\n";
$lines[] = "Han Mei\t\t10\n";
$lines[] = "Xiao Li\t\t15\n";
echo $header;
foreach ($lines as $line){
    echo $line;
}
// name		age
// Li Lei		20
// Han Mei		10
// Xiao Li		15