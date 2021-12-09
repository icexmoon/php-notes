<?php

namespace xyz\icexmoon\php_notes\ch14\analysis3;
require_once './my_class/my_class.cls.php';
function print_namespace()
{
    echo "namespace:" . __NAMESPACE__ . PHP_EOL;
}
print_namespace();
my_class\print_namespace();
// namespace:xyz\icexmoon\php_notes\ch14\analysis3
// namespace:xyz\icexmoon\php_notes\ch14\analysis3\my_class

