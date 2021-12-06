<?php
class MyClass{
    public readonly $attr;
    // Fatal error: Readonly property MyClass::$attr must have type in ...
    public function __construct()
    {
        $this->attr = "hello";
    }
}
$mc = new MyClass;
echo $mc->attr.PHP_EOL;
$mc->attr = "bye";
echo $mc->attr.PHP_EOL;
