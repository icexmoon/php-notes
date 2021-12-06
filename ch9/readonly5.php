<?php
class MyClass{
    public readonly string $attr = 'hello';
    // Fatal error: Readonly property MyClass::$attr cannot have default value in ...
}
