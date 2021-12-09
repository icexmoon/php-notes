<?php
class MyClass
{
    public $publicAttr = 'public attr';
    protected $protectedAttr = 'protected attr';
    private $privateAttr = 'private attr';
    public function __construct()
    {
        echo $this->publicAttr . PHP_EOL;
        echo $this->protectedAttr . PHP_EOL;
        echo $this->privateAttr . PHP_EOL;
    }
}
class Child extends MyClass
{
    public function __construct()
    {
        echo $this->publicAttr . PHP_EOL;
        echo $this->protectedAttr . PHP_EOL;
    }
}
$mc = new MyClass;
echo $mc->publicAttr;
// public attr
// protected attr
// private attr
// public attr
