<?php
function sentence(string $str)
{
    $words = str_word_count($str, 1);
    foreach ($words as $key => $val) {
        yield $val;
    }
}
foreach (sentence("hello world, how are you!") as $word) {
    echo $word . PHP_EOL;
}
// hello
// world
// how
// are
// you