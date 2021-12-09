<?php
require_once './pointer.cls.php';
$p1 = new Pointer(1, 6);
$p2 = $p1;
$p3 = &$p1;
$p3->set_x(9);
$p4 = &$p3;
$p5 = &$p4;
echo "p1:{$p1}".PHP_EOL;
echo "p2:{$p2}".PHP_EOL;
echo "p3:{$p3}".PHP_EOL;
echo "p4:{$p4}".PHP_EOL;
echo "p5:{$p5}".PHP_EOL;
// p1:(9,6)
// p2:(9,6)
// p3:(9,6)
// p4:(9,6)
// p5:(9,6)
