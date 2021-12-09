<?php
require_once './duck.cls.php';
require_once './green_duck.cls.php';
function play_duck(Duck $duck)
{
    $duck->quack();
    $duck->swim();
}
$green_duck = new GreenDuck();
play_duck($green_duck);
