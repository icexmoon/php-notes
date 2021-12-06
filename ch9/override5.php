<?php
class Base
{
    public function test($param1, $param2)
    {
        echo "parma1:{$param1},param2:{$param2}" . PHP_EOL;
    }
}
class Child extends Base
{
    public function test($a, $b)
    {
        parent::test($a, $b);
    }
}
$c = new Child;
$c->test(1, 2);
$c->test(a: 1, b: 2);
// parma1:1,param2:2
// parma1:1,param2:2
function exec_test(Base $base)
{
    $base->test(1, 2);
}
exec_test($c);
// parma1:1,param2:2
function exec_test2(Base $base)
{
    $base->test(param1:1, param2:2);
}
exec_test2($c);
// Fatal error: Uncaught Error: Unknown named parameter $param1 in ...