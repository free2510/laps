<?php


interface Course
{
    public function enroll();
    public function drop();
}
class Student implements Course
{
    public function enroll()
    {
        echo 'They enrolled in the courses :';
    }

    public function drop()
    {
        echo 'Drop out of courses :';
    }
}


$student = new Student;
$student->enroll();
