<?php
$a = 1.234;
var_dump($a); 
// float(1.234)
$b = 1.2e3; 
var_dump($b);
// float(1200)
$c = 7E-10;
var_dump($c);
// float(7.0E-10)
$d = 1_234.567; // 从 PHP 7.4.0 开始支持
var_dump($d);
// float(1234.567)
