<?php
class Pointer implements Stringable
{
    public function __construct(private int $x, private int $y)
    {
    }
    public function set_x(int $x)
    {
        $this->x = $x;
    }
    public function set_y(int $y)
    {
        $this->y = $y;
    }
    public function __toString(): string
    {
        return "({$this->x},{$this->y})";
    }
}
$p1 = new Pointer(1, 6);
$p2 = clone $p1;
$p2->set_x(6);
$p2->set_y(10);
echo "Pointer1:{$p1}" . PHP_EOL;
echo "Pointer2:{$p2}" . PHP_EOL;
// Pointer1:(1,6)
// Pointer2:(6,10)

