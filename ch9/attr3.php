<?php
class MyClass
{
    public $func = null;
    public function __construct()
    {
        $this->func = function () {
            echo "non named function is called." . PHP_EOL;
        };
    }
}
$mc = new MyClass;
($mc->func)();
// non named function is called.
