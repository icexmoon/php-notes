<?php
class Counter{
    private static $counter = 0;
    public static function count():void{
        self::$counter++;
    }
    public static function print():void{
        $counter = self::$counter;
        echo "counter:{$counter}".PHP_EOL;
    }
    public static function count_times(static $cls, int $times):void{
        for ($i=0;$i<$times;$i++){
            $cls::count();
        }
    }
}
Counter::count();
Counter::print();
Counter::count_times(Counter,5);