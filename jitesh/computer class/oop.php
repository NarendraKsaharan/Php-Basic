<?php


// class student
// {
//     function __construct()
//     {
//         echo "Construct called<br>";
//     }

//     public function getName() {
//         $class = $this->getClass();
//         return "Student A, ".$class;
//     }

//     private function getClass() {
//         return "Class A";
//     }

//     protected function getAge() {
//         return "30";
//     }


//     function __destruct() {
//         echo "<br>Destruct called";
//     }

// }

// $stuObject = new student();

// echo $stuObject->getName();
// echo $stuObject->getName();
// echo $stuObject->getName();
// echo $stuObject->getName();
// echo $stuObject->getName();

//var_dump($stuObject);


class student
{
    public $name;

    function __construct($stName)
    {
        $this->name = $stName;
    }

    public function getName() {
        return $this->name;
    }

}

$stuObject1 = new student("St 11");
$stuObject2 = new student("St 22");

echo $stuObject1->getSum();

// echo $stuObject1->getName();
// echo $stuObject2->getName();

?>