<?php
class MyClass
{
    public function __toString()
    {
        return __CLASS__;
    }
}
$mc = new MyClass;
var_dump($mc instanceof MyClass);
// bool(true)

