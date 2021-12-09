<?php
function fibnaci($n)
{
    if ($n <= 2) {
        return 1;
    }
    return fibnaci($n - 1) + fibnaci($n - 2);
}
class Fibnaci
{
    public function __get($name)
    {
        if (strpos($name, 'index_') !== 0) {
            throw new Exception("invalidate attrubte name of Fibanaci class.", E_ERROR);
        }
        $n = substr($name, strlen("index_"));
        $n = intval($n);
        $result = fibnaci($n);
        $this->$name = $result;
        return $result;
    }
}

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
$fibnaci = new Fibnaci();
$start = microtime_float();
foreach (range(1, 30) as $val) {
    $name = "index_{$val}";
    echo $fibnaci->$name . " ";
}
echo PHP_EOL;
$end = microtime_float();
echo "use " . sprintf("%.2f", $end - $start) . "s" . PHP_EOL;
$start = microtime_float();
foreach (range(1, 30) as $val) {
    $name = "index_{$val}";
    echo $fibnaci->$name . " ";
}
echo PHP_EOL;
$end = microtime_float();
echo "use " . sprintf("%.2f", $end - $start) . "s" . PHP_EOL;
// 1 1 2 3 5 8 13 21 34 55 89 144 ...
// use 0.24s
// 1 1 2 3 5 8 13 21 34 55 89 144 ...
// use 0.00s
