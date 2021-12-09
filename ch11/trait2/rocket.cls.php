<?php
require_once './counter.cls.php';
class Rocket
{
    use Counter;
    public function __construct()
    {
        self::$counter++;
        self::$couner_name = __CLASS__;
    }
}
