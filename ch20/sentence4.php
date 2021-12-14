<?php
class Sentence implements ArrayAccess
{
    private array $words;
    public function __construct(string $string)
    {
        $this->words = str_word_count($string, 1);
    }
    public function get_length(): int
    {
        return count($this->words);
    }
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->words[$offset]);
    }
    public function offsetGet(mixed $offset): mixed
    {
        return $this->words[$offset];
    }
    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->words[$offset] = $value;
    }
    public function offsetUnset(mixed $offset): void
    {
        unset($this->words[$offset]);
    }
}
$sentence = new Sentence("hello world, how are you!");
for ($i = 0; $i < $sentence->get_length(); $i++) {
    echo $sentence[$i] . " ";
}
echo PHP_EOL;
// hello world how are you 
