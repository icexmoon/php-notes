<?php
require_once './stringer.cls.php';
class Pointer implements Stringer
{
    public function __construct(private int $x, private int $y)
    {
    }

    public function __toString(): string
    {
        return "({$this->x},{$this->y})";
    }
}
function print_stringer(Stringer $stringer)
{
    echo "{$stringer}" . PHP_EOL;
}
$p = new Pointer(1, 5);
print_stringer($p);
