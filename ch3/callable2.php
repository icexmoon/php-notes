<?php
function call_func(callable $func, ...$param)
{
    return $func(...$param);
}
class Calculator
{
    private $operator = [];
    private $inputData = [];
    private $result = 0;
    private $history = [];
    private function do_calculate()
    {
        $this->result = 0;
        $this->hitory = [];
        $operatorLen = count($this->operator);
        $inputDataLen = count($this->inputData);
        if ($operatorLen != $inputDataLen) {
            return;
        }
        if ($operatorLen <= 0) {
            return;
        }
        $this->history[] = "0";
        foreach ($this->inputData as $index => $data) {
            $opt = $this->operator[$index];
            if ($opt == '+') {
                $this->result += $data;
                $this->history[] = "+{$data}";
            } else if ($opt == '-') {
                $this->result -= $data;
                $this->history[] = "-{$data}";
            } else {;
            }
        }
        $this->history[] = "={$this->result}";
    }
    public function add(int $num)
    {
        $this->operator[] = '+';
        $this->inputData[] = $num;
    }
    public function sub($num)
    {
        $this->operator[] = '-';
        $this->inputData[] = $num;
    }
    public function __invoke()
    {
        $this->do_calculate();
        echo implode('',$this->history).PHP_EOL;
    }
}
$cal = new Calculator;
$cal->add(5);
$cal->add(10);
$cal->sub(5);
$cal->add(7);
$cal->sub(20);
call_func($cal);
// 0+5+10-5+7-20=-3
