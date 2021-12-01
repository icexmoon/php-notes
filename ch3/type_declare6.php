<?php
class Person{};
class Student extends Person{};
function do_something(Student|Person $person){
    ;
}