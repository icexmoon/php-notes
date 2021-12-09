<?php
class MyClass
{
    private $a = 'a';
    public $b = 'b';
    public function __debugInfo()
    {
        return ["b" => "string(1) 'b'"];
    }
}
var_dump(new MyClass());
// object(MyClass)#1 (1) {
//     ["b"]=>
//     string(13) "string(1) 'b'"
//   }