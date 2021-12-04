<?php
$varName = "number";
$$varName = 1;
echo "$number" . PHP_EOL;
echo "$$varName" . PHP_EOL;
echo "{$$varName}" . PHP_EOL;
// 1
// $number
// 1
$$varName = 2;
echo "$number" . PHP_EOL;
// 2
$arr = array("number1", "number2", "number3");
$$arr[0] = 1;
// Warning: Array to string conversion in ...
$arr = array("number1", "number2", "number3");
${$arr[0]} = 1;
echo $number1 . PHP_EOL;
// 1