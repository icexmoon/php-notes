<?php
function char(string $str): Generator
{
    $len = strlen($str);
    if ($len == 0) {
        yield "";
        return;
    }
    $index = 0;
    do {
        yield substr($str, $index, 1);
        $index++;
    } while ($index <= $len - 1);
}
function sentence(string $str): Generator
{
    $words = str_word_count($str, 1);
    foreach ($words as $key => $val) {
        yield from char($val);
    }
}
foreach (sentence("hello world, how are you!") as $word) {
    echo $word . " ";
}
echo PHP_EOL;
// h e l l o w o r l d h o w a r e y o u 
