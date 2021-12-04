<?php
if (!isset($_COOKIE['count'])) {
    $count = 0;
} else {
    $count = intval($_COOKIE['count']);
    $count += 1;
}
setcookie("count", $count, time() + 3600);
echo "now count: {$count}";
