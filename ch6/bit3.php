<?php
require_once "../util/error.php";
test_error_include(E_ERROR | E_NOTICE);
test_error_include(E_NOTICE | E_ERROR | E_STRICT);
// E_ERROR,E_NOTICE
// E_ERROR,E_NOTICE,E_STRICT
test_error_include(E_ALL & ~E_NOTICE); //E_NOTICE以外的错误级别
// E_ERROR,E_PARSE,E_STRICT,E_WARNING,E_CORE_ERROR,E_USER_ERROR
test_error_include(E_ALL ^ E_NOTICE); //E_NOTICE以外的错误级别
// E_ERROR,E_PARSE,E_STRICT,E_WARNING,E_CORE_ERROR,E_USER_ERROR
test_error_include(~E_NOTICE); //不推荐
// E_ERROR,E_PARSE,E_STRICT,E_WARNING,E_CORE_ERROR,E_USER_ERROR
require_once "../util/int.php";
print_binary(~E_NOTICE);
// 1111111111111111111111111111111111111111111111111111111111110111
print_binary(E_ALL & ~E_NOTICE);
// 111111111110111


