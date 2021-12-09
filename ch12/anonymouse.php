<?php
echo get_class(new class
{
}) . PHP_EOL;
// class@anonymousD:\workspace\http\php-notes\ch12\anonymouse.php:2$0
function create_anonymouse_class_obj(){
    return new class{};
}
$ac1 = create_anonymouse_class_obj();
$ac2 = create_anonymouse_class_obj();
if (get_class($ac1) === get_class($ac2)) {
    echo "ac1 and ac2 is from same anonymouse class." . PHP_EOL;
}
// ac1 and ac2 is from same anonymouse class.
$ac1 = new class
{
};
$ac2 = new class
{
};
if (get_class($ac1) === get_class($ac2)) {
    echo "ac1 and ac2 is from same anonymouse class." . PHP_EOL;
}
echo get_class($ac1).PHP_EOL;
echo get_class($ac2).PHP_EOL;
// class@anonymousD:\workspace\http\php-notes\ch12\anonymouse.php:6$1
// class@anonymousD:\workspace\http\php-notes\ch12\anonymouse.php:9$2

