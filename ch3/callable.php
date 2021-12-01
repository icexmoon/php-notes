<?php
function call_func(callable $func, ...$param)
{
    return $func(...$param);
}
$arr = ["a", "b", "c"];
echo call_func('implode', ',', $arr) . PHP_EOL;
// a,b,c
function my_print(...$params)
{
    foreach ($params as $param) {
        echo $param . " ";
    }
    echo PHP_EOL;
}
call_func("my_print", ...[1, 2, 3]);
// 1 2 3 
class Student
{
    protected $name;
    protected $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function print()
    {
        echo "name:{$this->name},age:{$this->age}" . PHP_EOL;
    }
    public static function new_student()
    {
        return new Student("", 0);
    }
}
$std = new Student("Li Lei", 20);
call_func(array($std, "print"));
// name:Li Lei,age:20
$std2 = call_func(array("Student", "new_student"));
$std2->print();
// name:,age:0
$std2 = call_func("Student::new_student");
$std2->print();
// name:,age:0
class Student2 extends Student
{
    public static function new_student()
    {
        return new Student2("new student", 20);
    }
}
$std3 = call_func(array("Student2", "new_student"));
$std3->print();
// name:new student,age:20
$std3 = call_func(array("Student2", "parent::new_student"));
$std3->print();
// Fatal error: Uncaught Error: Call to undefined method Student2::parent::new_student() in ...
