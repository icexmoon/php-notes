<?php
$intNum = 1024;
$strNum = "$intNum";
var_dump($intNum);
// int(1024)
echo '<br/>';
var_dump($strNum);
// string(4) "1024"
echo '<br/>';
$uid = 100;
$sql = "
SELECT * FROM users
WHERE user_id='${uid}'
";
var_dump($sql);
echo '<br/>';
// string(44) " SELECT * FROM users WHERE user_id='100' "