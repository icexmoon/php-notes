<?php

namespace xyz\icexmoon\php_notes\ch14\analysis6;

require_once './my_class/my_class.cls.php';
function print_namespace()
{
    echo "namespace:" . __NAMESPACE__ . PHP_EOL;
}
print_namespace();
\xyz\icexmoon\php_notes\ch14\analysis6\my_class\print_namespace();
// namespace:xyz\icexmoon\php_notes\ch14\analysis6
// namespace:xyz\icexmoon\php_notes\ch14\analysis6\my_class
