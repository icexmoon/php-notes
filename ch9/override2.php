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
    public function test($param = "hello")
    {
        parent::test($param);
    }
}
class Child2 extends BaseClass
{
    public function test($param, $param2 = 2)
    {
        parent::test($param);
    }
}
$c1 = new Child1;
$c2 = new Child2;
$c1->test(1);
$c2->test(1);
