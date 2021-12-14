<?php
//数组
$arr = [1, 2, 3];
var_dump($arr instanceof Traversable);
// bool(false)
//生成器
function create_gen(): Generator
{
    yield 0;
    yield 1;
    yield 2;
}
$gen = create_gen();
var_dump($gen instanceof Traversable);
// bool(true)
