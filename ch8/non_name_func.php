<?php
$nonNamedFunc = function () {
    echo "111" . PHP_EOL;
};
$nonNamedFunc();
// 111
var_dump($nonNamedFunc);
// object(Closure)#1 (0) {
// }
