<?php
class Student{
    var $name;
    var $age;
    function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}
$std1 = new Student("Li lei", 20);
echo "name:$std1->name age:$std1->age".PHP_EOL;
// name:Li lei age:20
$std2 = array("name"=>"Li lei","age"=>20);
echo "name:$std2[name] age:$std2[age]".PHP_EOL;
// name:Li lei age:20
$name = "Li lei";
$age = 20;
echo "name:$name age:$age".PHP_EOL;
// name:Li lei age:20
echo "name:${name}s age:${age}s".PHP_EOL;
// name:Li leis age:20s
$strName = 'name';
echo $std1->$strName.PHP_EOL;
// Li lei
echo "{$std1->$strName}".PHP_EOL;
// Li lei
// echo "$std1->$strName".PHP_EOL;
// PHP Fatal error:  Uncaught Error: Object of class Student could not be converted to string in ...
// echo "{ $std1->$strName }".PHP_EOL;
// PHP Fatal error:  Uncaught Error: Object of class Student could not be converted to string...
echo "{$std1->{$strName}}".PHP_EOL;
// Li lei




