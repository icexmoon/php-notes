<?php
class MyClass
{
    public function __call($name, $arguments)
    {
        echo "the method MyClass::{$name}() is called." . PHP_EOL;
    }
    public static function __callStatic($name, $arguments)
    {
        echo "the static method MyClass::{$name}() is called." . PHP_EOL;
    }
}
MyClass::no_defined_method(1, 2, 3);
// the static method MyClass::no_defined_method() is called.
$mc = new MyClass;
$mc->no_defined_method(1, 2, 3);
// the method MyClass::no_defined_method() is called.
