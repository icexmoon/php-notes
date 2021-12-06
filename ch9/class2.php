<?php

namespace xyz\icexmoon\php_notes\ch9;
class MyClass
{
}
$mc = new MyClass;
echo $mc::class.PHP_EOL;
// xyz\icexmoon\php_notes\ch9\MyClass
echo get_class($mc).PHP_EOL;
// xyz\icexmoon\php_notes\ch9\MyClass
