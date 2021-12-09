<?php
require_once __DIR__.'./string.php';

/**
 * 将类名转换为类文件名
 */
function convert_clsname_to_fname(string $clsName): string
{
    $len = strlen($clsName);
    if ($len <= 0) {
        return "";
    }
    $worlds = split_with_upper($clsName);
    if (count($worlds) == 0) {
        return "";
    }
    foreach ($worlds as &$val) {
        $val = strtolower($val);
    }
    unset($val);
    return implode('_', $worlds);
}

// function main()
// {
//     $fname = convert_clsname_to_fname("MyClass");
//     echo $fname . PHP_EOL;
// }

// main();
