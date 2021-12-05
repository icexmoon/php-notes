<?php
$students = array(
    array("Li lei", 20, "3年级", "2班", "swim"),
    array("Xiao Ming", 15, "5年级", "6班", "draw"),
    array("Jack Chen", 10, "7年级", "2班", "music"),
);
foreach ($students as list($name,, $favorite)) {
    echo "Student(name:{$name}, favorite:{$favorite}" . PHP_EOL;
}
// Student(name:Li lei, favorite:3年级
// Student(name:Xiao Ming, favorite:5年级
// Student(name:Jack Chen, favorite:7年级
