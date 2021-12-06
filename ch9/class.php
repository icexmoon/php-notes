<?php

namespace xyz\icexmoon\php_notes\ch9;

class MyClass
{
    public static function get_full_clsname(): string
    {
        return self::class;
    }
}
echo MyClass::get_full_clsname() . PHP_EOL;
