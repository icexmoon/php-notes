<?php
$students = array(
    array("name" => "Li Lei", "Math" => 90, "English" => 100),
    array("name" => "Han Mei", "Math" => 80, "English" => 90),
    array("name" => "Xiao Li", "Math" => 70, "English" => 95),
);
$total = array();
foreach ($students as $std){
    foreach ($std as $key => $val){
        if ($key != "name" && is_int($val)){
            if (!isset($total[$key])){
                $total[$key] = 0;
            }
            $total[$key]+=$val;
        }
    }
}
foreach ($total as $key => $val){
    echo "[$key] total score: $val".PHP_EOL;
}
// [Math] total score: 240
// [English] total score: 285

