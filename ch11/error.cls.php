<?php
interface Error
{
    //错误类型
    const ERROR_USER = 1;
    const ERROR_UNKNOWN = 2;
    const ERROR_DB = 3;
    const ERROR_WEB = 4;

    /**
     * 返回错误信息
     */
    public function error(): string;
}
