<?php
require_once './ui.php';
class MyButton extends Button
{
    protected string $btnType = 'MyButton';
    public function __construct(private string $btnName)
    {
    }
    public function click(mixed $mouse)
    {
        if (is_null($this->listener)) {
            $this->set_onclick_listener(new class implements OnclickListener
            {
                public function onclick(mixed $mouse, mixed $view): void
                {
                    echo "nonymouse classes's onlick method is called." . PHP_EOL;
                }
            });
        }
        parent::click($mouse);
    }
}
$btn = new Mybutton("my button");
$btn->click(null);
