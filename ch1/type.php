<?php
$num = 1;
var_dump($num);
echo "<br/>";
// int(1)
$type = gettype($num);
echo $type;
echo "<br/>";
// integer
if (is_array($num)){
    echo '$num'." is array";
}
else if (is_integer($num)){
    echo '$num'." is int";
}
else{
    echo '$num'." is unknown type";
}
echo "<br/>";
// $type is int