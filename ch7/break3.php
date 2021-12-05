<?php
$a = range(1, 10);
foreach ($a as $val) {
    for ($i = 0; $i < $val; $i++) {
        if ($i >= 6) {
            break 2;
        }
        echo '*';
    }
    echo PHP_EOL;
}
// *
// **
// ***
// ****
// *****
// ******
// ******
