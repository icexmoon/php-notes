<?php
require_once "../util/array2.php";
class MyClass{
    public readonly array $arr;
    public function __construct(mixed &...$params)
    {
        $this->arr = $params;
    }
    public function __toString()
    {
        return convert_array_to_str($this->arr);
    }
}
[$a, $b, $c] = [1, 3, 5];
$mc = new MyClass($a, $b, $c);
echo $mc.PHP_EOL;
// [0:1, 1:3, 2:5]
$a = 99;
echo $mc.PHP_EOL;
// [0:99, 1:3, 2:5]
