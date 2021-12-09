<?php

namespace xyz\icexmoon\php_notes\ch14\use;

use xyz\icexmoon\php_notes\ch14\use\my_class\MyClass;

use const xyz\icexmoon\php_notes\ch14\use\my_class\NAME_SPACE;

use function xyz\icexmoon\php_notes\ch14\use\my_class\print_my_class;

require_once './my_class/my_class.php';
$mc = new MyClass();
$mc->number = 10;
print_my_class($mc);
echo NAME_SPACE . PHP_EOL;
// MyClass(10)
// xyz\icexmoon\php_notes\ch14\use\my_class
