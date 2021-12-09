<?php
abstract class Control
{
    protected bool $need_login = true;
    protected array $header = [];
    final public function handle_request()
    {
        $this->pre_handle();
        $this->handle();
        $this->after_handle();
    }

    protected function pre_handle()
    {
        if ($this->need_login) {
            //执行登录检查
        }
    }

    /**
     * 页面的请求处理逻辑
     */
    abstract protected function handle();

    protected function after_handle()
    {
        //http请求处理后的动作
        //使用模版引擎渲染html页面
        //输出http头
        //输出http body
    }
}
