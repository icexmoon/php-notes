<?php
$student = array();
$student["name"] = "Li Lei";
echo "${student['name']}".PHP_EOL;
echo "${student["name"]}".PHP_EOL;
echo "{$student['name']}".PHP_EOL;
echo "{$student["name"]}".PHP_EOL;
// Li Lei
// Li Lei
// Li Lei
// Li Lei
