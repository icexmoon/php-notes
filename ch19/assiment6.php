<?php
$msg1 = 'hello';
$msg2 = 'world!';
function change_msg()
{
    $GLOBALS['msg2'] = &$GLOBALS['msg1'];
}
change_msg();
echo "$msg1 $msg2" . PHP_EOL;
// hello hello
