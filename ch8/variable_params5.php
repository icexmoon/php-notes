<?php
function double_all(int &...$params)
{
    foreach ($params as &$val) {
        $val = $val * 2;
    }
}
$a = 1;
$b = 3;
$c = 5;
double_all($a, $b, $c);
echo "{$a} {$b} {$c}";
// 2 6 10
