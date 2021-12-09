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
trait Trait2
{
    public function test(): void
    {
        echo "Trait2:test() is called." . PHP_EOL;
    }
}
class Child extends Base
{
    use Trait1, Trait2 {
        Trait2::test insteadof Trait1;
    }
}
$c = new Child;
$c->test();
// Trait2:test() is called.

