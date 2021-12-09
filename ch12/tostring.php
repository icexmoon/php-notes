<?php
class Pointer implements Stringable
{
    public function __construct(private int $x, private int $y)
    {
    }
    public function __toString(): string
    {
        return "({$this->x},{$this->y})";
    }
}
$p1 = new Pointer(1, 5);
$p2 = new Pointer(2, 10);
echo "Pointer1:{$p1}" . PHP_EOL;
// Pointer1:(1,5)
