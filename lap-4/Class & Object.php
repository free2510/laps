<?php

class Student
{
    private $name;
    private $age;
    private $studentId;

    static $totalStudents = 0;

    public function __construct($name = null, $age = null, $studentId = null)
    {
        $this->name = $name;
        $this->age = $age;
        $this->studentId = $studentId;

        self::$totalStudents += 1;
    }
    public function display_info()
    {
        echo "Name: {$this->name}\n";
        echo "</br>";
        echo "Age: {$this->age}\n";
        echo "</br>";
        echo "Student ID: {$this->studentId}\n";
        echo "</br>=====================</br>";
    }


    public static function getTotalStudents()
    {
        return self::$totalStudents;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getStudentId()
    {
        return $this->studentId;
    }
}

class GraduateStudent extends Student{
    
}













$student1 = new Student('abdullah',22,1234);
$student2 = new Student('fatma',25,6666);
$student3 = new Student('sara',23,4567);

echo Student::getTotalStudents(),"</br>=================</br>";
// =================================================
$student1->display_info();
$student2->display_info();
$student3->display_info();
// =================================================
echo $student1->getName();