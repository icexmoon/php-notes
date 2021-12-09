<?php
require_once './ui.php';
$btn = new Button;
$btn->set_onclick_listener(new class implements OnclickListener{
    public function onclick(mixed $mouse, mixed $view): void
    {
        echo "nonymouse classes's onclick method is called.".PHP_EOL;
    }
});
$btn->click(null);
// nonymouse classes's onclick method is called.
