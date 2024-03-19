<?php

class school 
{

    function getSchoolInfo() {
        return $this->getSchoolName() . $this->getSchoolAddress();
    }

    private function getSchoolName() {
        return "Tech Academy";
    }

    private function getSchoolAddress() {
        return "SRDR, 331403";
    }
}


class student extends school
{
    const SAY_HI = "Hiiii";

    function getInfo() {
        $info = "My name is: Student A, My school info is ". $this->getSchoolInfo(). self::getStudentAge();
        return $info;
    }

    public static function getStudentAge()
    {
        return 20;
    }
}

$stuObj = new student();
//echo student::SAY_HI;
echo $stuObj->getInfo();


//echo $stuObj->getSchoolName();





//=============================================


// class student
// {

//     public $a;
//     protected $b;

//     function __construct($x, $y)
//     {
//         $this->a = $x;
//         $this->b = $y;
//     }

//     function sum()
//     {
//         $c = $this->a + $this->b;
//         return $c;
//     }
// }


// $sObj = new student(10, 20);
// $sObj1 = new student(10, 30);
// // echo $sObj->b;
// echo $sObj->sum();
// echo "<br>";
// echo $sObj1->sum();


?>