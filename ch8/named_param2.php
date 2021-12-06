<?php
function named_params($param1, $param2, $param3)
{
    echo "param1:{$param1}" . PHP_EOL;
    echo "param2:{$param2}" . PHP_EOL;
    echo "param3:{$param3}" . PHP_EOL;
}
named_params(1, param3: 3, param2: 2);
// param1:1
// param2:2
// param3:3
