<?php
$a = 100;
class MyClass
{
    public int $attr1 = $a;
    // Fatal error: Constant expression contains invalid operations in ...
    protected string $attr2 = implode(',', [1, 2, 3]);
    // Fatal error: Constant expression contains invalid operations in ...
}
