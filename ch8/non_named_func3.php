<?php
function my_call_func(callable $func)
{
    $func();
}
my_call_func(function () {
    echo "non named func is called.";
});
// non named func is called.

