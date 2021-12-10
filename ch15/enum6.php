<?php

namespace xyz\icexmoon\php_notes\ch15;

use Error;
use Exception;

enum UserType: int
{
    case ADMIN = 1; //管理员
    case NORMAL = 2; //普通用户
    case VIP = 3; //vip
}
function create_user(string $name, UserType $type)
{
    echo "create new user, name:{$name}, type:{$type->name}" . PHP_EOL;
}
create_user("admin", UserType::ADMIN);
// create new user, name:admin, type:ADMIN
echo UserType::VIP->value . PHP_EOL;
// 3
function get_user_type(int $typeFlag): ?UserType
{
    return UserType::tryFrom($typeFlag);
}
$ut = get_user_type(1);
$ut2 = get_user_type(5);
echo "name:{$ut->name},value:{$ut->value}" . PHP_EOL;
// name:ADMIN,value:1
echo "name:{$ut2?->name},value:{$ut2?->value}" . PHP_EOL;
// name:,value:
