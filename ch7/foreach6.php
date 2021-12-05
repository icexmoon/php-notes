<?php
$students = array(
    array("Li lei", 20),
    array("Xiao Ming", 15),
    array("Jack Chen", 10),
);
foreach ($students as $std) {
    $name = $std[0];
    $age = $std[1];
    echo "Student(name:{$name}, age:{$age})" . PHP_EOL;
}
