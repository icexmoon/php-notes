<?php
class BaseClass{
    public function test(){
        echo "BaseClass->test() is called.".PHP_EOL;
    }
}
class ChildClass extends BaseClass{
    public function test(){
        parent::test();
        echo "ChildClass->test() is called.".PHP_EOL;
    }
}
$cc = new ChildClass;
$cc->test();
// BaseClass->test() is called.
// ChildClass->test() is called.
