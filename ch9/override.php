<?php
class Counter
{
    protected int $counter = 0;
    protected int $times = 0;
    public function add(int $num): void
    {
        $this->counter += $num;
        $this->times++;
    }
    public function average(): float
    {
        if ($this->times == 0) {
            return 0;
        }
        return $this->counter / $this->times;
    }
}
