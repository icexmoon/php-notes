<?php

namespace xyz\icexmoon\php_notes\ch14\use;

use xyz\icexmoon\php_notes\ch14\use\my_class\MyClass;

use const xyz\icexmoon\php_notes\ch14\use\my_class\NAME_SPACE;

use function xyz\icexmoon\php_notes\ch14\use\my_class\print_my_class as print_myclass;

require_once './my_class/my_class.php';
function print_my_class(MyClass $mc)
{
    echo "redeclared print_my_class function." . PHP_EOL;
    echo "MyClass[number=>{$mc->number}]" . PHP_EOL;
}
$mc = new MyClass();
$mc->number = 10;
print_myclass($mc);
// MyClass(10)
print_my_class($mc);
// redeclared print_my_class function.
// MyClass[number=>10]
echo NAME_SPACE . PHP_EOL;
// xyz\icexmoon\php_notes\ch14\use\my_class
