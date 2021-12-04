<?php
$a = 'hello';
$a .= ' world';
$a .= '!';
$a .= PHP_EOL;
echo $a;
$longStr = array();
$longStr[] = 'hello';
$longStr[] = ' world';
$longStr[] = '!';
$longStr[] = PHP_EOL;
$a = implode('', $longStr);
echo $a;
// hello world!

