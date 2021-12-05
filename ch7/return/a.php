<?php
// a.php
$num = 1;
if ($num < 5){
    return "\$num < 5";
}
else{
    return "\$num >= 5";
}
echo "this will not be executed".PHP_EOL;