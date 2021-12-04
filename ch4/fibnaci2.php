<?php
function fibnaci($n)
{
    static $result = 0;
    if ($n <= 2) {
        $result = 1;
    }
    fibnaci($n - 1) + fibnaci($n - 2);
    return 
}
for ($i = 1; $i < 11; $i++) {
    echo fibnaci($i) . " ";
}
echo PHP_EOL;
