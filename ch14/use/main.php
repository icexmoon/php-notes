<?php

namespace xyz\icexmoon\php_notes\ch14\use;

require_once './my_class/my_class.php';

use xyz\icexmoon\php_notes\ch14\use\my_class;

$mc = new my_class\MyClass();
$mc->number = 10;
my_class\print_my_class($mc);
echo my_class\NAME_SPACE . PHP_EOL;
// MyClass(10)
// xyz\icexmoon\php_notes\ch14\use\my_class

