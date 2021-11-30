<?php
$student = array(
    "name" => "Xiao Li",
    "age" => 20,
);
echo "name:{$student["name"]}, age:{$student["age"]}".PHP_EOL;
// name:Xiao Li, age:20
var_dump($student["test"]);
// Warning: Undefined array key "test" in D:\workspace\http\php-notes\ch2\get_value.php on line 8
// NULL