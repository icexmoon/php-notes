<?php
function testInArray($value, $array)
{
    if (in_array($value, $array)) {
        echo "$value is in array." . PHP_EOL;
    }
}
$array = ["123"];
testInArray("123", $array);
testInArray(123, $array);
// 123 is in array.
// 123 is in array.


