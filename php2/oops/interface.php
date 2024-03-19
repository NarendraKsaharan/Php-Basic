<?php

// abstract class parentclass{
//     public $name;
//     abstract protected function calc($a,$b);
// }
// class childclass extends parentclass{
//     public function calc($a,$b){
//         $msg=$a+$b;
//         return $msg;
//     }
// }

// $obj=new childclass();
// echo $obj->calc(10,20);


// interface parent1{
//     function calc($a,$b);
// }
// interface parent2{
//     function sub($c,$d);
// }
// class childclass implements parent1,parent2{
//     public function calc($a,$b){
//         $c=$a+$b;
//         return $c;
//     }
//     public function sub($c,$d){
//         $msg=$c-$d;
//         return $msg;
//     }
// }
// $obj=new childclass();
// echo $obj->calc(10,20)."<br>";
// echo $obj->sub(10,20);

class manager{
     protected $tour=2000,$mobile=500,$totalsalary;
    protected function into(){
        $this->totalsalary=$this->salary+$this->tour+$this->mobile;
        return "<H1>Manager Profile</H1>"."Employee Name:".$this->name."<br>"."Employee Age:".$this->age."<br>"."Employee Salary:".$this->totalsalary;   
    }

}

class employee extends manager{
    public $name,$age,$salary;
    function __construct($n,$a,$s){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
    }
    function info(){
        
        $msg="<h1>Employee Profile</h1>"."Employee Name:".$this->name."<br>"."Employee Age:".$this->age."<br>"."Employee Salary".$this->salary."<br>";
        return $msg;
    }
    function hi(){
        $m=$this->into()."<br>";
        return $m;
    }
    
}

$obj=new employee("sundeep",21,20000);
$obj1=new employee("sajjan",23,25000);
echo $obj->info();
 echo $obj1->hi();
?>