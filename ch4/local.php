<?php
function use_local(){
    $func_var = "func_var";
    do{
        $loop_var = "loop_var";
    }
    while(false);
    echo $loop_var.PHP_EOL;
    // loop_var
}
use_local();
echo $func_var.PHP_EOL;
// Warning: Undefined variable $func_var in ...