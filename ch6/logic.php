<?php
$a = 1;
$b = 5;
if ($a < $b && is_int($a)) {
    echo "a < b" . PHP_EOL;
    // a < b
}
if ($a < $b and is_int($a)) {
    echo "a < b" . PHP_EOL;
    // a < b
}
var_dump(true xor true);
// bool(false)
var_dump(false xor false);
// bool(false)
var_dump(true xor false);
// bool(true)
var_dump(false xor true);
// bool(true)


