<?php

namespace xyz\icexmoon\php_notes\ch15\color6;

use stdClass;

trait Test
{
    public function test()
    {
        echo "Test::test() is called." . PHP_EOL;
    }
    public static function static_test()
    {
        echo "Test::static_test() is called." . PHP_EOL;
    }
}

interface ChineseAble
{
    public function get_chinese_name(): string;
}

enum Color implements ChineseAble
{
    use Test;
    const DEEP_COLOR = 1;
    const LIGHT_COLOR = 2;
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
    public function get_color_type(): int
    {
        return match ($this) {
            self::LIGHT_PINK, self::PINK, self::LIGHT_STEE_BLUE => self::LIGHT_COLOR,
            self::CRIMSON, self::BLUE, self::DEEP_PINK => self::DEEP_COLOR,
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
    $colorType = match ($color->get_color_type()) {
        Color::DEEP_COLOR => '深色系',
        Color::LIGHT_COLOR => '浅色系',
        default => '未定义色系',
    };
    echo "color:" . $color->name . ", Chinese name:" . $color->get_chinese_name() . ", color type:{$colorType}" . PHP_EOL;
}
$color = Color::BLUE;
$color = unserialize(serialize($color));
print_color($color);
// color:BLUE, Chinese name:蓝色, color type:深色系
echo serialize(Color::BLUE) . PHP_EOL;
echo serialize(new stdClass) . PHP_EOL;
// E:45:"xyz\icexmoon\php_notes\ch15\color6\Color:BLUE";
// O:8:"stdClass":0:{}
echo json_encode(Color::BLUE) . PHP_EOL;
