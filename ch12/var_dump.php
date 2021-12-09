<?php
var_dump(12.5);
// float(12.5)
var_dump([1, 2, 3]);
// array(3) {
//   [0]=>
//   int(1)
//   [1]=>
//   int(2)
//   [2]=>
//   int(3)
// }
class MyClass
{
    private $a = 'a';
    public $b = 'b';
}
var_dump(new MyClass());
// object(MyClass)#1 (2) {
//     ["a":"MyClass":private]=>
//     string(1) "a"
//     ["b"]=>
//     string(1) "b"
//   }