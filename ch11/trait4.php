<?php
trait Trait1
{
    public function test(): void
    {
        echo "Trait1::test() is called." . PHP_EOL;
    }
}
class Base
{
    public function test(): void
    {
        echo "Base::test() is called." . PHP_EOL;
    }
}
class Child extends Base
{
    use Trait1;
    public function test(): void
    {
        echo "Child::test() is called." . PHP_EOL;
    }
}
$c = new Child;
$c->test();
// Child::test() is called.
