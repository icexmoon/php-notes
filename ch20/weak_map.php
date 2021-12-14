<?php
$map = new WeakMap();
$obj = new stdClass;
$map[$obj] = 1;
echo count($map) . PHP_EOL;
// 1
unset($obj);
echo count($map) . PHP_EOL;
// 0

