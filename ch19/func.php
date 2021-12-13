<?php
function pass_ref(&$param)
{
    $param++;
}
$a = 1;
pass_ref($a);
echo $a;
// 2

