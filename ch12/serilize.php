<?php
class MyClass
{
    public function __serialize(): array
    {
        echo "MyClass::__serialize() is called." . PHP_EOL;
        return [];
    }
    public function __unserialize(array $data): void
    {
        echo "MyClass::__unserialize() is called." . PHP_EOL;
    }
    public function __sleep()
    {
        echo "MyClass::__sleep() is called." . PHP_EOL;
    }
    public function __wakeup()
    {
        echo "MyClass::__wakeup() is called." . PHP_EOL;
    }
}
$mc = new MyClass;
$mc = serialize($mc);
$mc = unserialize($mc);
// MyClass::__serialize() is called.
// MyClass::__unserialize() is called.
