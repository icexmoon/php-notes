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
    use Trait1, Trait2;
    
// Fatal error: Trait method Trait2::test has not been applied as Child::test, because of collision with Trait1::test in ...
}
$c = new Child;
$c->test();
