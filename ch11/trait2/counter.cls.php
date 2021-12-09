<?php
trait Counter
{
    private static int $counter = 0;
    private static string $couner_name = "";
    public static function counter_print(): void
    {
        echo "now have " . self::$counter . " " . self::$couner_name . PHP_EOL;
    }
}
