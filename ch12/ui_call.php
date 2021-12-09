<?php
require_once './ui.php';
$btn = new Button;
class MyOnclickListener implements OnclickListener
{
    public function onclick(mixed $mouse, mixed $view): void
    {
        echo "MyOnclickListener::onclick is called." . PHP_EOL;
    }
}
$btn->set_onclick_listener(new MyOnclickListener());
$btn->click(null);
// MyOnclickListener::onclick is called.