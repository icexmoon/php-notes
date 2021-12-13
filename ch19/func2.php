<?php
class MyClass{
    public $num = 0;
}
function pass_ref(MyClass &$mc)
{
    $mc->num++;
}
$a = new MyClass;
pass_ref($a);
echo $a->num;
// 1

