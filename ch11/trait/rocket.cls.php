<?php
class Rocket
{
    private static $counter = 0;
    private static $name = __CLASS__;
    public function __construct()
    {
        self::$counter++;
    }
    public static function counter_print()
    {
        echo "now have " . self::$counter . " " . self::$name . PHP_EOL;
    }
}
