<?php
// b.php
namespace xyz\icexmoon\php_notes\ch14\conflict2;
require_once './a/a.php';
class MyClass{
   
}
$mc = new MyClass;
$mc1 = new A\MyClass;