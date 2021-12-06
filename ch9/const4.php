<?php
class MyClass
{
    const const1 = "1";
    const const2 = 1.5;
    const const3 = 1 + 2;
}
class Child extends MyCLass{
    const const1 = "hello";
}
$className = "MyClass";
echo $className::const1 . PHP_EOL;
echo $className::const2 . PHP_EOL;
echo $className::const3 . PHP_EOL;
// 1
// 1.5
// 3
