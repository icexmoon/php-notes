<?php
$create_number = new Fiber(function (): void {
    Fiber::suspend();
    for ($i = 0; $i <= 10; $i++) {
        Fiber::suspend($i);
    }
    Fiber::suspend(null);
});
$double_number = new Fiber(function (Fiber $create_number): void {
    Fiber::suspend();
    while (true) {
        $number = $create_number->resume();
        if ($number === null) {
            $create_number->resume();
            Fiber::suspend(null);
            break;
        }
        Fiber::suspend($number * 2);
    }
});;
$print_number = new Fiber(function (Fiber $double_number) {
    while (true) {
        $number = $double_number->resume();
        if (null === $number) {
            $double_number->resume();
            break;
        }
        echo $number . " ";
    }
});
$create_number->start();
$double_number->start($create_number);
$print_number->start($double_number);
// 0 2 4 6 8 10 12 14 16 18 20 
