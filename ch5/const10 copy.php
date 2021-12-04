<?php
function define_const(){
    define("MSG","hello");
}
if (defined("MSG")){
    echo MSG.PHP_EOL;
}
define_const();
if (defined("MSG")){
    echo MSG.PHP_EOL;
    // hello
}
