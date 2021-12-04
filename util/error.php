<?php
function test_error_include(int $multiErros)
{
    $errors = array();
    if ($multiErros & E_ERROR) {
        $errors[] = "E_ERROR";
    }
    if ($multiErros & E_PARSE) {
        $errors[] = "E_PARSE";
    }
    if ($multiErros & E_NOTICE) {
        $errors[] = "E_NOTICE";
    }
    if ($multiErros & E_STRICT) {
        $errors[] = "E_STRICT";
    }
    if ($multiErros & E_WARNING) {
        $errors[] = "E_WARNING";
    }
    if ($multiErros & E_CORE_ERROR) {
        $errors[] = "E_CORE_ERROR";
    }
    if ($multiErros & E_USER_ERROR) {
        $errors[] = "E_USER_ERROR";
    }
    echo implode(',', $errors) . PHP_EOL;
}
