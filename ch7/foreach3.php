<?php
require_once "../util/array.php";
$a = range(1, 10);
foreach ($a as $key => $val) {
    $a[$key] = 2 * $val;
}
print_arr($a);
// [0:2, 1:4, 2:6, 3:8, 4:10, 5:12, 6:14, 7:16, 8:18, 9:20]

