<?php
class Student{}
Class Teacher{}
function printStudent(Student $student){
    ;
}
printStudent(new Student);
printStudent(null);
// Fatal error: Uncaught TypeError: printStudent(): Argument #1 ($student) must be of type Student, null given,