<?php
class MyClass
{
    public string $attr1 = 'val1';
    public string $attr2 = 'val2';
    public string $attr3 = 'val3';
    protected string $attr4 = 'val4';
    private string $attr5 = 'val5';
    public function access_this()
    {
        foreach ($this as $attr_name => $attr_val) {
            echo "\$this->$attr_name=$attr_val" . PHP_EOL;
        }
    }
}
$mc = new MyClass;
$mc->access_this();
// $this->attr1=val1
// $this->attr2=val2
// $this->attr3=val3
// $this->attr4=val4
// $this->attr5=val5
echo PHP_EOL;
foreach ($mc as $attr_name => $attr_val) {
    echo "\$this->$attr_name=$attr_val" . PHP_EOL;
}
// $this->attr1=val1
// $this->attr2=val2
// $this->attr3=val3

