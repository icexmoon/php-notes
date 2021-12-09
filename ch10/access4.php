<?php
class Pointer
{
    public function __construct(private int $x, private  int $y)
    {
    }
    public function add(Pointer $other): Pointer
    {
        $x = $this->x + $other->x;
        $y = $this->y + $other->y;
        return new self($x, $y);
    }
    public function __toString()
    {
        return "({$this->x},{$this->y})";
    }
}
$p1 = new Pointer(1, 3);
$p2 = new Pointer(2, 6);
$p3 = $p1->add($p2);
echo "{$p1}+{$p2}={$p3}" . PHP_EOL;
// (1,3)+(2,6)=(3,9)
