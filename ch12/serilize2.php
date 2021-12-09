<?php
class MyClass implements Serializable
{
    public $attr = 'attr_val';
    public function __serialize(): array
    {
        echo "MyClass::__serialize() is called." . PHP_EOL;
        return [];
    }
    public function __unserialize(array $data): void
    {
        echo "MyClass::__unserialize() is called." . PHP_EOL;
    }
    public function serialize(): string
    {
        echo "MyClass::serialize() is called." . PHP_EOL;
        return json_encode((array)$this);
    }
    public function unserialize(string $data)
    {
        echo "MyClass:unserialize() is called." . PHP_EOL;
        $arr = json_decode($data);
        $this->attr = $arr['attr'];
    }
}
$mc = new MyClass;
$mc = serialize($mc);
$mc = unserialize($mc);
// MyClass::__serialize() is called.
// MyClass::__unserialize() is called.
