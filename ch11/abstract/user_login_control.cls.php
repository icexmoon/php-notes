<?php
require_once './control.cls.php';
class UserLoginControl extends Control{
    protected bool $need_login = false;

    protected function handle()
    {
        //从表单获取用户名和密码
        //查询数据库检查用户名密码是否正确
        //如果正确，将用户信息写入session
        //准备返回数据
    }
}