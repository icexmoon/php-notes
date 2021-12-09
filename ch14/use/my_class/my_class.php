<?php

namespace xyz\icexmoon\php_notes\ch14\use\my_class;

const NAME_SPACE = __NAMESPACE__;
function print_my_class(MyClass $mc)
{
    echo "MyClass({$mc->number})" . PHP_EOL;
}
class MyClass
{
    public $number;
}
