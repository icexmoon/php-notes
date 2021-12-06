<?php
class MyClass{
    public function print(){
        echo "MyClass->print() is called".PHP_EOL;
    } 
}
$myclass = new MyClass;
$myclass_print = array($myclass,"print");
$myclass_print();
// MyClass->print() is called
