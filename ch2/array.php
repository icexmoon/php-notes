<?php
$student = array(
    "name" => 'Li lei',
    "age" => 20,
    "new_element" => 'test',
);
$student = array("name"=>"Li lei","age"=>20,);
$student = [
    "name" => "Li lei",
    "age" => 20
];
// var_dump($student);
$students = array(
    0 => array("name" => "Li lei","age"=>20),
    "Han Mei" => array("name" => "Han Mei", "age"=>10),
);
echo $students[0]["name"].PHP_EOL;
// Li lei
echo $students["Han Mei"]["name"].PHP_EOL;
// Han Mei
