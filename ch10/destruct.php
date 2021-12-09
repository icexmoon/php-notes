<?php
class MyClass
{
    public function __destruct()
    {
        echo __CLASS__ . "'s __destruct is called." . PHP_EOL;
    }
}
$mc =  new MyClass;
// MyClass's __destruct is called.
