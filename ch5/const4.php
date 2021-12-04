<?php
define('MSG', implode(',', array(1, 2, 3)));
echo MSG.PHP_EOL;
// 1,2,3
if (defined('MSG')){
    echo "MSG is defined".PHP_EOL;
    // MSG is defined
}