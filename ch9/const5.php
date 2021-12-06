<?php
class MyClass
{
    const ONE = 1;
    const TWO = self::ONE * 2;
    const THREE = self::TWO + 1;
}
echo MyClass::ONE . PHP_EOL;
echo MyClass::TWO . PHP_EOL;
echo MyClass::THREE . PHP_EOL;
// 1
// 2
// 3

