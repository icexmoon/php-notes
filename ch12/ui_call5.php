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
            $this->set_onclick_listener(new class($this->btnName) extends MyButton implements OnclickListener
            {
                public function __construct(private string $btnName)
                {
                }
                public function onclick(mixed $mouse, mixed $view): void
                {
                    echo "nonymouse classes's onlick method is called." . PHP_EOL;
                    echo "the button name is {$this->btnName}." . PHP_EOL;
                    echo "the button type is {$this->btnType}." . PHP_EOL;
                }
            });
        }
        parent::click($mouse);
    }
}
$btn = new Mybutton("my button");
$btn->click(null);
// nonymouse classes's onlick method is called.
// the button name is my button.
// the button type is MyButton.
