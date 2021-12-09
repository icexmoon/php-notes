<?php
class Pointer
{
    private int $x;
    private int $y;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}
$p = new Pointer(y: 2, x: 1);
