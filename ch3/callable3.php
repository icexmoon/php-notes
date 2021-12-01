<?php
function call_func(callable $func, ...$param)
{
    return $func(...$param);
}
$nonNamedFunc = function (int $a, int $b): int {
    return $a + $b;
};
$result = call_func($nonNamedFunc, 1, 6);
echo $result.PHP_EOL;
// 7
