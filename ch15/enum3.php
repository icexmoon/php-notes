<?php

namespace xyz\icexmoon\php_notes\ch15;

enum UserType
{
    case ADMIN; //管理员
    case NORMAL; //普通用户
    case VIP; //vip
}
$ut_admin1 = UserType::ADMIN;
$ut_admin2 = UserType::ADMIN;
var_dump($ut_admin1 === $ut_admin2);
// bool(true)
var_dump($ut_admin1 === UserType::VIP);
// bool(false)
