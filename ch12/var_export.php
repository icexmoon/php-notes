<?php
$a = '123';
var_export($a);
// '123'
echo PHP_EOL;
$num = 12.5;
var_export($num);
// 12.5
echo PHP_EOL;
$arr = [1, 2, 3];
var_export($arr);
// array (
//   0 => 1,
//   1 => 2,
//   2 => 3,
// )
echo PHP_EOL;
class MyClass
{
    public  $a = 'a';
    private $b = 'b';
}
$obj = new MyClass();
var_export($obj);
// MyClass::__set_state(array(
//    'a' => 'a',
//    'b' => 'b',
// ))
echo PHP_EOL;
