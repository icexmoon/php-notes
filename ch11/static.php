<?php
class Counter
{
    private static int $total = 0;
    private static int $nums = 0;
    public function __construct(private int $number)
    {
        self::$total += $number;
        self::$nums++;
    }
    public static function average(): float
    {
        if (self::$nums == 0) {
            return 0;
        }
        return self::$total / self::$nums;
    }
    public function __destruct()
    {
        self::$total -= $this->number;
        self::$nums--;
    }
    public function __toString()
    {
        return (string)$this->number;
    }
}
[$c1, $c2, $c3] = [new Counter(1), new Counter(9), new Counter(10)];
echo "{$c1},{$c2},{$c3}" . PHP_EOL;
echo "average:" . sprintf("%.2f", Counter::average())  . PHP_EOL;
// 1,9,10
// average:6.67

