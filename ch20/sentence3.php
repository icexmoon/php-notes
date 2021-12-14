<?php
class Sentence implements IteratorAggregate
{
    private array $words;
    public function __construct(string $string)
    {
        $this->words = str_word_count($string, 1);
    }
    public function getIterator(): Traversable
    {
        return new class($this->words) implements Iterator
        {
            private array $words;
            private int $index = 0;
            public function __construct(array &$words)
            {
                $this->words = &$words;
            }
            public function current(): mixed
            {
                return $this->words[$this->index];
            }
            public function rewind(): void
            {
                $this->index = 0;
            }
            public function next(): void
            {
                $this->index++;
            }
            public function key(): mixed
            {
                return $this->index;
            }
            public function valid(): bool
            {
                return isset($this->words[$this->index]);
            }
        };
    }
}
$sentence = new Sentence("hello world, how are you!");
foreach ($sentence as $word) {
    echo $word . PHP_EOL;
}
echo PHP_EOL;
// hello
// world
// how
// are
// you
