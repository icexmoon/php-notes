<?php
date_default_timezone_set("Asia/Shanghai");
$counter = array(
    'count' => 0,
    'time' => time(),
);
if (isset($_COOKIE['counter'])) {
    $unResult = json_decode($_COOKIE['counter'], true);
    if ($unResult !== false && is_array($counter)) {
        $counter = $unResult;
    }
}
$counter['time'] = time();
$counter['count']++;
setcookie('counter', json_encode($counter), time() + 3600);
$timeStr = date("Y-m-d H:i:s",$counter['time']);
echo "count:{$counter['count']}<br/>";
echo "time:{$timeStr}<br/>";
