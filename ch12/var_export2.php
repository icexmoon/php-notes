<?php
class MyClass
{
    public  $a = 'a';
    private $b = 'b';
    public static function __set_state($properties): object
    {
        $mc = new MyClass;
        $mc->a = $properties['a'];
        $mc->b = $properties['b'];
        return $mc;
    }
}
$obj = MyClass::__set_state(array('a' => 'a', 'b' => 'b'));
