<?php
class Student{
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}
$std = new Student("Li Lei", 20);
$attrName = "name";
echo $std->$attrName.PHP_EOL;
// Li Lei
$an1 = "na";
$an2 = "me";
echo $std->{$an1.$an2}.PHP_EOL;
// Li Lei
$arr = array("name");
echo $std->{$arr[0]}.PHP_EOL;
// Li Lei


