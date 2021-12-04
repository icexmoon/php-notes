<?php
class Student{}
$obj = null;
function global_no_ref(){
    global $obj;
    $newObj = new stdClass;
    $obj = $newObj;
}
function global_ref(){
    global $obj;
    $newObj = new Student;
    $obj = &$newObj;
}
global_no_ref();
var_dump($obj);
global_ref();
var_dump($obj);
