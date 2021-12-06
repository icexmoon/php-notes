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
$mc->func();
// Fatal error: Uncaught Error: Call to undefined method MyClass::func() in ...