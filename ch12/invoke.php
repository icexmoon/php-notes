<?php
class MyClass{
    public function __invoke()
    {
        echo "MyClass::__invoke is called.".PHP_EOL;
    }
}
$mc =  new MyClass;
$mc();
// MyClass::__invoke is called.
