<?php
class UserType
{
    const ADMINI = 0; //管理员
    const NORMAL = 1; //普通用户
    const VIP = 2; //vip
}
function create_user(string $name, int $type)
{
    echo "create new user, name:{$name}, type:{$type}" . PHP_EOL;
}
create_user("admin", UserType::ADMINI);
create_user("test", 5);
// create new user, name:admin, type:0
// create new user, name:test, type:5

