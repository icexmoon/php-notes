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
}

$child =  new Child();
// Base::__construct is called.
