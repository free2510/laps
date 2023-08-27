<?php
class Student
{
    private $name;
    private $age;
    private $studentId;

    public function __construct($name = null, $age = null, $studentId = null)
    {
        $this->name = $name;
        $this->age = $age;
        $this->studentId = $studentId;
    }
    public function display()
    {
        echo "Name: {$this->name} </br>Student ID : {$this->studentId} </br>Age : {$this->age} </br>";
    }
}

class GraduateStudent extends Student
{
    private $thesisTopic;


    public function __construct($name, $age, $studentId, $thesisTopic)
    {
        parent::__construct($name, $age, $studentId);
        $this->thesisTopic = $thesisTopic;
    }

    public function display()
    {
        parent::display();
        echo "Topic is : {$this->thesisTopic} </br>";
    }
}


$student1 = new GraduateStudent('abdullah', 22, 1234, 'php');

$student1->display();





//2- Override the display method to include the thesisTopic when displaying details of a graduate student.