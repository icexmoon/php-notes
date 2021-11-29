<?php
class Student{
    var $name;
    var $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function __toString()
    {
        return "student(name:{$this->name},age:{$this->age})";   
    }
}
$std1 = new Student('Li Lei',20);
echo $std1.PHP_EOL;
// student(name:Li Lei,age:20)

