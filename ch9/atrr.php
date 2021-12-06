<?php
class MyClass{
    public $attr = "attribute";
    public function attr(){
        echo "attr method is called".PHP_EOL;
    }
}
$mc = new MyClass;
echo $mc->attr.PHP_EOL;
// attribute
echo $mc->attr();
// attr method is called
