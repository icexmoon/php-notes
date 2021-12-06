<?php
class Student{
    public string $name;
    public int $age;
}
$std = new Student;
echo $std->name.PHP_EOL;
// Fatal error: Uncaught Error: Typed property Student::$name must not be accessed before initialization in ...