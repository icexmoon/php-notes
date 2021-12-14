<?php
class MyClass implements Countable
{
    public function __construct(private array $arr)
    {
    }
    public function count(): int
    {
        return count($this->arr);
    }
}
$mc = new MyClass([1, 2, 3]);
echo count($mc);
// 3