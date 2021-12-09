<?php

/**
 * 鼠标监听事件接口
 */
interface OnclickListener
{
    /**
     * 鼠标点击事件
     * @param $mouse 鼠标
     * @param $view 图形UI控件
     */
    public function onclick(mixed $mouse, mixed $view): void;
}
/**
 * 基础的图形控件
 */
class View
{
    protected ?OnclickListener $listener = null;
    public function set_onclick_listener(OnclickListener $listener)
    {
        $this->listener = $listener;
    }
    public function click(mixed $mouse)
    {
        $this->listener->onclick($mouse, $this);
    }
}
/**
 * 按钮
 */
class Button extends View
{
}

