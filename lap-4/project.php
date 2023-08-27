<?php
class Student
{
    private $name;
    private $age;
    private $studentId;

    private static $totalStudents = 0;

    public function __construct($name = null, $age = null, $studentId = null)
    {
        $this->name = $name;
        $this->age = $age;
        $this->studentId = $studentId;

        self::$totalStudents += 1;
    }
    public function display_info()
    {
        echo "</br>=====================</br>";
        echo "Name: {$this->name} </br>";
        echo "</br>";
        echo "Age: {$this->age} </br>";
        echo "</br>";
        echo "Student ID: {$this->studentId} </br>";
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

class GraduateStudent extends Student
{
    private $thesisTopic;
    private $score;

    public function __construct($name = null, $age = null, $studentId = null, $thesisTopic = null, $score = null)
    {
        parent::__construct($name, $age, $studentId);
        $this->thesisTopic = $thesisTopic;
        $this->score = $score;
    }

    public function enroll()
    {
        echo "Enrolled in a course </br>";
    }

    public function drop()
    {
        echo "Dropped a course </br>";
    }
    use score;

}


interface Course
{
    public function enroll();
    public function drop();
}

trait score
{
    public function display_Topic()
    {
        echo "Topic is : {$this->thesisTopic} </br> score : {$this->score}";
    }
}


$student = new GraduateStudent('Abdullah', 22,'648', 'php', 90);

$student->display_Topic();
$student->display_info();

$student->enroll();