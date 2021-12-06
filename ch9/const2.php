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
echo Child::const1 . PHP_EOL;
echo Child::const2 . PHP_EOL;
echo Child::const3 . PHP_EOL;
// hello
// 1.5
// 3