<?php
$obj = new stdClass;
$weakObj = WeakReference::create($obj);
var_dump($weakObj->get());
unset($obj);
var_dump($weakObj->get());
// object(stdClass)#1 (0) {
// }
// NULL
