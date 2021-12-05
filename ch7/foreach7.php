<?php
$students = array(
    array("Li lei", 20),
    array("Xiao Ming", 15),
    array("Jack Chen", 10),
);
foreach ($students as list($name, $age)) {
    echo "Student(name:{$name}, age:{$age})" . PHP_EOL;
}
// Student(name:Li lei, age:20)
// Student(name:Xiao Ming, age:15)
// Student(name:Jack Chen, age:10)

