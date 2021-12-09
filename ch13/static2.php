<?php
class Base
{
    public static function test(): void
    {
        echo "Base::test() is called." . PHP_EOL;
    }
    public static function call_test()
    {
        echo "Base::call_test() is called." . PHP_EOL;
        static::test();
    }
}
class Child extends Base
{
    public static function test(): void
    {
        echo "Child::test() is called." . PHP_EOL;
    }
}
Child::call_test();
// Base::call_test() is called.
// Child::test() is called.