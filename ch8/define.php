<?php
function create_func(int $num){
    if ($num<10){
        function test(){
            echo "test function is called".PHP_EOL;
            echo "the \$num < 10";
        }
    }
    else{
        function test(){
            echo "test function is called".PHP_EOL;
            echo "the \$num >= 10";
        }
    }
}
create_func(10);
test();
// test function is called
// the $num >= 10
create_func(10);
// Fatal error: Cannot redeclare test() (previously declared in ...