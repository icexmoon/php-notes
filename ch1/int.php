<?php
$nums = array();
$nums[] = 123;
$nums[] = 0123; //1*8^2+2*8^1+3=83
$nums[] = 0x123; //1*16^2+2*16+3=291
$nums[] = 0b110; //1*2^2+1*2+0=6
foreach ($nums as $num){
    echo "${num}<br/>";
}
// 123
// 83
// 291
// 6
$num = 12_345_678;
echo "${num}<br/>";
// 12345678
$num2 = intval((0.7+0.1)*10);
echo "${num2}<br/>";
// 7
$float1 = 1.5;
$float2 = 1.523333;
if (abs($float1-$float2)<0.1){
    echo "float1 == float2<br/>";
    // float1 == float2
}