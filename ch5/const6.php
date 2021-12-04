<?php
$consts = get_defined_constants();
foreach ($consts as $constName => $constValue){
    if (strpos($constName, 'E_')===0){
        echo "name:{$constName} value:{$constValue}".PHP_EOL;
    }
}
// name:E_ERROR value:1
// name:E_RECOVERABLE_ERROR value:4096
// name:E_WARNING value:2
// name:E_PARSE value:4
// name:E_NOTICE value:8
// name:E_STRICT value:2048
// ...