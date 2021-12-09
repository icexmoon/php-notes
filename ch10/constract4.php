<?php
class Base
{
    public function __construct($param)
    {
        echo "Base::__construct is called." . PHP_EOL;
        echo "\$param:{$param}" . PHP_EOL;
    }
}

class Child extends Base
{
    public function __construct()
    {
        parent::__construct('test');
        echo "Child::__construct is called." . PHP_EOL;
    }
}

$child =  new Child();
// Base::__construct is called.
// $param:test
// Child::__construct is called.

