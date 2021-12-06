<?php
class BaseClass
{
    public function test($param)
    {
        echo "BaseClass->test($param) is called." . PHP_EOL;
    }
}
class Child1 extends BaseClass
{
    public function test($param, $param2)
    // Fatal error: Declaration of Child1::test($param, $param2) must be compatible with BaseClass::test($param) in ...
    {
        parent::test(1);
    }
}