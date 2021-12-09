<?php
class MyClass{
    public function __construct()
    {
        $this->public_method();
        $this->protected_method();
        $this->private_method();
    }
    public function public_method(){
        echo "public method is called.".PHP_EOL;
    }
    protected function protected_method(){
        echo "protected method is called.".PHP_EOL;
    }
    private function private_method(){
        echo "private method is called.".PHP_EOL;
    }
}
class Child extends MyClass{
    public function __construct()
    {
        $this->public_method();
        $this->protected_method();
    }
}
$mc = new MyClass;
$mc->public_method();
// public method is called.
// protected method is called.
// private method is called.
// public method is called.