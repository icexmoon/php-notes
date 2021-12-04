<?php
function my_error_handle($err_no, $err_msg, $filename, $linenum){
    if (!(error_reporting() & $err_no)){
        return false;
    }
    echo $err_msg.PHP_EOL;
}
set_error_handler("my_error_handle");
$lines = @file("file_no_exists") || die("file is not exists, exit.");
// file(file_no_exists): Failed to open stream: No such file or directory
// file is not exists, exit.