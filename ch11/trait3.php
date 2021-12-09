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
class Child extends Base{
    use Trait1;
}
$c = new Child;
$c->test();
// Trait1::test() is called.
