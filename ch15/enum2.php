<?php

namespace xyz\icexmoon\php_notes\ch15;

enum UserType
{
    case ADMIN; //管理员
    case NORMAL; //普通用户
    case VIP; //vip
}
function create_user(string $name, UserType $type)
{
    echo "create new user, name:{$name}, type:{$type->name}" . PHP_EOL;
}
create_user("admin", UserType::ADMIN);
// create new user, name:admin, type:ADMIN
create_user("test", 5);
// PHP Fatal error:  Uncaught TypeError: xyz\icexmoon\php_notes\ch15\create_user():
