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