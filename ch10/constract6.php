<?php
class Pointer
{
    public function __construct(private $x, private $y)
    {
    }
    public function __toString()
    {
        return "Pointer(x:{$this->x},y:{$this->y})";
    }
}
$p = new Pointer(y: 2, x: 1);
echo $p . PHP_EOL;
// Pointer(x:1,y:2)
