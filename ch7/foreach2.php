<?php
function get_fibnaci(): iterable
{
    yield 1;
    yield 1;
    yield 2;
    yield 3;
    yield 5;
}
foreach (get_fibnaci() as $num) {
    echo "{$num} ";
}
echo PHP_EOL;
