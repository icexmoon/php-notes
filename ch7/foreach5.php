<?php
require_once "../util/array.php";
$a = range(1, 10);
foreach ($a as &$val) {
    $val = 2 * $val;
}
print_arr($a);
// [0:2, 1:4, 2:6, 3:8, 4:10, 5:12, 6:14, 7:16, 8:18, 9:20]
$b = [1, 1, 1];
foreach ($b as $val) {;
}
print_arr($a);
// [0:2, 1:4, 2:6, 3:8, 4:10, 5:12, 6:14, 7:16, 8:18, 9:1]
