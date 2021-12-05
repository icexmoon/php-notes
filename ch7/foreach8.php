<?php
$students = array(
    array("Li lei", 20),
    array("Xiao Ming", 15),
    array("Jack Chen", 10),
);
foreach ($students as list($name,)) {
    echo "Student(name:{$name}" . PHP_EOL;
}
// Student(name:Li lei
// Student(name:Xiao Ming
// Student(name:Jack Chen
