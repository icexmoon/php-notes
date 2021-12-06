<?php
class MyClass{
    public static function print(){
        echo "MyClass::print() is called".PHP_EOL;
    }
}
$myclass_print = array("MyClass", "print");
$myclass_print();
// MyClass::print() is called
