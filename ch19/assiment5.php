<?php
$msg1 = 'hello';
$msg2 = 'world!';
function change_msg()
{
    global $msg1;
    $GLOBALS['msg2'] = &$msg1;
}
change_msg();
echo "$msg1 $msg2" . PHP_EOL;
// hello hello
