<?php
require_once './duck.cls.php';
class GreenDuck implements Duck
{
    public function quack()
    {
        echo "green duck is quacking..." . PHP_EOL;
    }

    public function swim()
    {
        echo "green duck is swimming..." . PHP_EOL;
    }
}
