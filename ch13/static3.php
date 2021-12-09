<?php
/**
 * corpyright by https://www.php.net/manual/zh/language.oop5.late-static-bindings.php
 */
class A
{
    public static function foo()
    {
        static::who();
    }

    public static function who()
    {
        echo __CLASS__ . "\n";
    }
}

class B extends A
{
    public static function test()
    {
        A::foo();
        parent::foo();
        self::foo();
    }

    public static function who()
    {
        echo __CLASS__ . "\n";
    }
}
class C extends B
{
    public static function who()
    {
        echo __CLASS__ . "\n";
    }
}

C::test();
// A
// C
// C
