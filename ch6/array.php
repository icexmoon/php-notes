<?php
require_once "../util/array.php";
$a = ['a1', 'a2', 'a3'];
$b = ['b1', 'b2'];
print_arr($a + $b);
// [0:a1, 1:a2, 2:a3]
print_arr($b + $a);
// [0:b1, 1:b2, 2:a3]
$a = ["banana" => "banana", "apple" => "apple"];
$b = ["banana" => "banana", "orange" => "orange"];
print_arr($a + $b);
// [banana:banana, apple:apple, orange:orange]
print_arr($b + $a);
// [banana:banana, orange:orange, apple:apple]
print_arr(array_unique(array_merge($a, $b)));
// [banana:banana, apple:apple, orange:orange]
$a = ["banana" => "banana", "apple" => "apple"];
$b = ["apple" => "apple", "banana" => "banana"];
var_dump($a == $b);
// bool(true)
$a = [1,2];
$b = ["1","02"];
var_dump($a == $b);
// bool(true)
$a = ["banana" => "banana", "apple" => "apple"];
$b = ["apple" => "apple", "banana" => "banana"];
var_dump($a === $b);
// bool(false)
$a = [1,2];
$b = ["1","02"];
var_dump($a === $b);
// bool(false)


