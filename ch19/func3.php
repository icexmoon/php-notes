<?php
function &increase(int &$a)
{
    $a++;
    return $a;
}
$a = 1;
increase(increase($a));
echo $a;
// 3