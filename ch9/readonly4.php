<?php
class MyClass{
    public readonly string $attr;
}
$mc = new MyClass;
$mc->attr = "bye";
// Fatal error: Uncaught Error: Cannot initialize readonly property MyClass::$attr from global scope in ...
echo $mc->attr.PHP_EOL;
