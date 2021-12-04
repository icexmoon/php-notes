<?php
class ParentClass
{
}
class MyClass extends ParentClass
{
}
$a = new MyClass;
var_dump($a instanceof MyClass);
var_dump($a instanceof ParentClass);
// bool(true)
// bool(true)
var_dump(!($a instanceof MyClass));
// bool(false)


