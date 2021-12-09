<?php
class Base
{
    public function __construct()
    {
        echo "Base::__construct is called." . PHP_EOL;
    }
}

class Child extends Base
{
    public function __construct()
    {
        echo "Child::__construct is called." . PHP_EOL;
    }
}

$child =  new Child();
// Child::__construct is called.
