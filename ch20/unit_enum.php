<?php
enum Color
{
    case RED;
    case WHITE;
    case BLACK;
}
var_dump(Color::BLACK instanceof UnitEnum);
// bool(true)

