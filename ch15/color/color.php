<?php

namespace xyz\icexmoon\php_notes\ch15\color;

interface ChineseAble
{
    public function get_chinese_name(): string;
}

enum Color implements ChineseAble
{
    case LIGHT_PINK; //浅粉色
    case PINK; //粉色
    case CRIMSON; //深红色
    case DEEP_PINK; //深粉色
    case BLUE; //蓝色
    case LIGHT_STEE_BLUE; //亮钢蓝
    public function get_chinese_name(): string
    {
        return match ($this) {
            Color::LIGHT_PINK => '浅粉色',
            Color::PINK => '粉色',
            Color::CRIMSON => '深红色',
            Color::DEEP_PINK => '深粉色',
            Color::BLUE => '蓝色',
            Color::LIGHT_STEE_BLUE => '亮蓝色',
        };
    }
}
function print_color(Color $color): void
{
    echo "color:" . $color->name . ", Chinese name:" . $color->get_chinese_name() . PHP_EOL;
}
print_color(Color::LIGHT_PINK);
print_color(Color::PINK);
// color:LIGHT_PINK, Chinese name:浅粉色
// color:PINK, Chinese name:粉色