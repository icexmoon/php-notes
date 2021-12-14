<?php
interface MyOuterIterator extends Iterator,IteratorAggregate{
}
class MyClass implements MyOuterIterator{
    public function getIterator(): Traversable
    {
        return $this;
    }
    public function current(): mixed
    {
        
    }
    public function next(): void
    {
        
    }
    public function key(): mixed
    {
        
    }
    public function rewind(): void
    {
        
    }
    public function valid(): bool
    {
        
    }
}