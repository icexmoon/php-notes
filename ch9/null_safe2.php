<?php
class Student
{
    public string $name = "";
    public int $age = 0;
    public function compare(?Student $other): int
    {
        if (is_null($other)){
            return 1;
        }
        return match (true) {
            $this->age < $other->age => -1,
            $this->age == $other->age => 0,
            $this->age > $other->age => 1,
        };
    }
}
$std1 = new Student;
$std2 = new Student;
$std1->age = 15;
$std2->age = 18;
echo "result:{$std1->compare($std2)}" . PHP_EOL;
echo "result:{$std1->compare(null)}" . PHP_EOL;
// result:-1
// result:1
