<?php
class MyClass
{
    const const1 = "1";
    const const2 = 1.5;
    const const3 = 1 + 2;
}
echo MyClass::const1 . PHP_EOL;
echo MyClass::const2 . PHP_EOL;
echo MyClass::const3 . PHP_EOL;
// 1
// 1.5
// 3
