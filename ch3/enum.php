<?php
enum Color
{
    case Red;
    case Blue;
    case Yellow;
    case Green;
}
function do_something(Color $color){
    if ($color == Color::Red){
        echo "good color!".PHP_EOL;
    }
    else{
        echo "bad color.".PHP_EOL;
    }
}
do_something(Color::Blue);
do_something(Color::Yellow);
do_something(Color::Red);
$color1 = Color::Blue;
if ($color1 === Color::Blue){
    echo "equal!".PHP_EOL;
    // equal!
}
if ($color1 instanceof Color){
    echo "instace of Color".PHP_EOL;
    // instace of Color
}
var_dump($color1->name);
// string(4) "Blue"

