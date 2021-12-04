<?php
function fibnaci($n)
{
    if ($n <= 2) {
        return 1;
    }
    return fibnaci($n - 1) + fibnaci($n - 2);
}
for ($i = 1; $i < 11; $i++) {
    echo fibnaci($i) . " ";
}
echo PHP_EOL;
