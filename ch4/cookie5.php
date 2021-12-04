<?php
date_default_timezone_set("Asia/Shanghai");
$counter = array(
    'count' => 0,
    'time' => time(),
);
if (isset($_COOKIE['counter']) && is_array($_COOKIE['counter'])) {
    $counter = $_COOKIE['counter'];
}
$counter['time'] = time();
$counter['count']++;
setcookie('counter[count]', $counter['count'], time() + 3600);
setcookie('counter[time]', $counter['time'], time() + 3600);
$timeStr = date("Y-m-d H:i:s", $counter['time']);
echo "count:{$counter['count']}<br/>";
echo "time:{$timeStr}<br/>";
