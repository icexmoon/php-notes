<?php
$a = range(1, 10);
foreach ($a as $val) {
    echo PHP_EOL;
    for ($i = 0; $i < $val; $i++) {
        if ($i >= 3 && $val % 2 == 0) {
            continue 2;
        }
        echo '*';
    }
}
// 
// *
// **
// ***
// ***
// *****
// ***
// *******
// ***
// *********
// ***