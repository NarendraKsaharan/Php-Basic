<?php

// class student{
//    public $name;
//    function __construct($n){
//        $this->name=$n;
//    }
//    function hi(){
//     $msg="sajjan ".$this->name.$this->stuAddress();
//     return $msg;
//    }
//    protected function stuAddress(){
//     return " jhunjhunu";
//    }
// }

// $stuobj=new student("kumar");
// echo $stuobj->hi();

// class school{
//     protected function getSchoolName(){
//         return "Techzento Academy";
//     }
// }
// class student extends school{
//     public $name;
//     function __construct($n){
//         $this->name=$n;

//     }
//     function info(){
//         $msg="sajjan ".$this->name.$this->stuAddress().$this->getSchoolName();
//         return $msg;
//     }
//     protected function stuAddress(){
//         return " jhunjhunu";
//     }
// }
// $stuobj=new student("kulhari");
// echo $stuobj->info();

// class school{
//     private function getSchoolName() {
//         return "Techzento Academy";
//     }
//     function info(){
//      $m = $this->getSchoolName();
//         return $m;
//     }

// }
// class student extends school{
//     public $name;
//     function __construct($n){
//         $this->name=$n;
//     }
//     function hi(){
//         $msg="sajjan ".$this->name.$this->stuAddress().$this->info();
//         return $msg;
//     }
//     protected function stuAddress(){
//         return " jhunjhunu";
//     }
// }

// $stuobj=new student("kulhari");
// echo $stuobj->hi();

class School
{
    protected function getSchoolName() {
        return "Tech zento Academy";
    }
}
class student extends school{
    private $name;
    const ABOUT_CLASS = "Hi!! ";
    function __construct($n){
        $this->name=$n;
    }
    function info(){
        $msg=Student::ABOUT_CLASS."sajjan ".$this->name.$this->getSchoolName();
        return $msg;
    }
}

$stuobj=new student("kulhari");
echo $stuobj->info();




?>