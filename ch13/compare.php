<?php
require_once './pointer.cls.php';
$p1 = new Pointer(1, 5);
$p2 = new Pointer(1, 5);
var_dump($p1 == $p2);
var_dump($p1 === $p2);
// bool(true)
// bool(false)
$p3 = $p2;
var_dump($p3 == $p2);
var_dump($p3 === $p2);
// bool(true)
// bool(true)

