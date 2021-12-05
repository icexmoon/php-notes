<?php
function cond_func1()
{
    echo "cond_func1 is called" . PHP_EOL;
    return 1;
}
function cond_func2()
{
    echo "cond_func2 is called" . PHP_EOL;
    return 2;
}
function cond_func3()
{
    echo "cond_func3 is called" . PHP_EOL;
    return 3;
}
function match_func(int $num): string
{
    return match ($num) {
        cond_func1() => 'func1',
        cond_func2() => 'func2',
        cond_func3() => 'func3',
        default => 'no matched func',
    };
}
match_func(1);
// cond_func1 is called
match_func(2);
// cond_func1 is called
// cond_func2 is called
match_func(3);
// cond_func1 is called
// cond_func2 is called
// cond_func3 is called
match_func(4);
// cond_func1 is called
// cond_func2 is called
// cond_func3 is called
