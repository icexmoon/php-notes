<?php

namespace xyz\icexmoon\php_notes\ch15\color2;

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
    public static function get_color_by_code(string $code): ?self
    {
        return match ($code) {
            "#FFB6C1" => self::LIGHT_PINK,
            "#FFC0CB" => self::PINK,
            "#DC143C" => self::CRIMSON,
            "#FF1493" => self::DEEP_PINK,
            "#0000FF" => self::BLUE,
            "#B0C4DE" => self::LIGHT_STEE_BLUE,
            default => null,
        };
    }
}
function print_color(?Color $color): void
{
    if (is_null($color)) {
        echo "It's not a valid color." . PHP_EOL;
        return;
    }
    echo "color:" . $color->name . ", Chinese name:" . $color->get_chinese_name() . PHP_EOL;
}
print_color(Color::get_color_by_code("#B0C4DE"));
print_color(Color::get_color_by_code("#000080"));
// color:LIGHT_STEE_BLUE, Chinese name:亮蓝色
// It's not a valid color.
