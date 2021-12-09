<?php
class MyClass
{
    public const PUBLIC_CONST = 'public const';
    protected const PROTECTED_CONST = 'protected const';
    private const PRIVATE_CONST = 'private const';
    public function __construct()
    {
        echo self::PUBLIC_CONST . PHP_EOL;
        echo self::PROTECTED_CONST . PHP_EOL;
        echo self::PRIVATE_CONST . PHP_EOL;
    }
}
class Child extends MyClass
{
    public function __construct()
    {
        echo parent::PUBLIC_CONST . PHP_EOL;
        echo parent::PROTECTED_CONST . PHP_EOL;
    }
}
echo MyClass::PUBLIC_CONST . PHP_EOL;
$mc = new MyClass;
// public const
// public const
// protected const
// private const
