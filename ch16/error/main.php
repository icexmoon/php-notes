<?php
require_once './index.php';
fopen("not_exist.txt","r");
// PHP Warning:  fopen(not_exist.txt): Failed to open stream: No such file or directory in D:\workspace\http\php-notes\ch16\error\main.php on line 5
// Warning: fopen(not_exist.txt): Failed to open stream: No such file or directory in D:\workspace\http\php-notes\ch16\error\main.php on line 5
