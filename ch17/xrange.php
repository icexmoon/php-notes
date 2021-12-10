<?php
function xrange(int $start, int $end, int $step): Generator
{
    if ($step <= 0) {
        throw new Exception("invlid step param.");
    }
    if ($start < $end) {
        for ($i = $start; $i <= $end; $i += $step) {
            yield $i;
        }
    } else {
        for ($i = $start; $i >= $end; $i -= $step) {
            yield $i;
        }
    }
}
function print_generator(Generator $gen)
{
    foreach ($gen as $val) {
        echo $val . " ";
    }
    echo PHP_EOL;
}
$gen1 = xrange(1, 10, 1);
$gen2 = xrange(20, 3, 3);
print_generator($gen1);
print_generator($gen2);
// 1 2 3 4 5 6 7 8 9 10 
// 20 17 14 11 8 5 

