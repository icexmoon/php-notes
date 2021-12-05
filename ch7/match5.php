<?php
function get_grade(int $mark): string
{
    return match (true) {
        $mark < 60 => 'D',
        $mark >= 60 && $mark < 80 => 'C',
        $mark >= 80 && $mark < 90 => 'B',
        $mark >= 90 && $mark <= 100 => 'A',
        default => 'Error',
    };
}
echo get_grade(55).PHP_EOL;
// D
echo get_grade(70).PHP_EOL;
// C
echo get_grade(90).PHP_EOL;
// A
