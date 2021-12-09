<?php
class Pointer
{
    private function __construct(private $x, private $y)
    {
    }
    public function __toString()
    {
        return "Pointer(x:{$this->x},y:{$this->y})";
    }
    public static function create_from_normal(int $x, int $y): self
    {
        return new self($x, $y);
    }
    public static function create_from_json(string $jsonStr): self
    {
        $arr = json_decode($jsonStr, true);
        return new self($arr['x'], $arr['y']);
    }
    public static function create_from_array(array $arr): self
    {
        return new self($arr['x'], $arr['y']);
    }
}
$p1 = Pointer::create_from_array(['x' => 1, 'y' => 9]);
$p2 = Pointer::create_from_json('{"x":2,"y":6}');
$p3 = Pointer::create_from_normal(5, 10);
echo $p1 . PHP_EOL;
echo $p2 . PHP_EOL;
echo $p3 . PHP_EOL;
// Pointer(x:1,y:9)
// Pointer(x:2,y:6)
// Pointer(x:5,y:10)

