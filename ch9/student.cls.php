<?php
class Student
{
    protected string $name = "";
    protected int $age = 0;
    public function print(): void
    {
        echo "Student(name:{$this->name}, age:{$this->age})" . PHP_EOL;
    }
}
