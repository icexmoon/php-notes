<?php
$number = 1;
var_dump($number);
// int(1)
echo '<br/>';
$number = (string)$number;
var_dump($number);
// string(1) "1"
echo '<br/>';
$number = (array)$number;
var_dump($number);
// array(1) { [0]=> string(1) "1" }
echo '<br/>';
$number = (object)$number;
var_dump($number);
// object(stdClass)#1 (1) { ["0"]=> string(1) "1" }
echo '<br/>';
