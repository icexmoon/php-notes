<?php
class MyClass{
    public readonly string $attr;
    public function __construct()
    {
        $this->attr = "hello";
    }
}
$mc = new MyClass;
echo $mc->attr.PHP_EOL;
// hello
$mc->attr = "bye";
// Fatal error: Uncaught Error: Cannot modify readonly property MyClass::$attr in ...
echo $mc->attr.PHP_EOL;
