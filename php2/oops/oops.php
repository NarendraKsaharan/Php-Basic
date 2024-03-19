<?php

// class Student
// {



//     function __construct($name) {
//         //echo $name;
//         // echo "Construct Called<br>";
//     }

//     protected function hi() {
//         $msg = "Welcome! Hi ";
//         //echo $msg;
//         return $msg;
//     }

//     function welcome($nm) {
//         $mssg = $this->hi();
//         return $mssg.$nm;
//     }
//     // function __destruct() {
//     //     echo "Destruct Called<br>";
//     // }

// }

// $stuObj = new Student("Stu name 1");
// echo $stuObj->welcome("Kumar");

// $stuObj->hi();
// $stuObj->hi();
// $stuObj->hi();



// class Student 
// {

//     public $name;

//     function __construct($n) {
//         $this->name = $n;
//     }

//     function hi() {
//         $msg = "Hi ".$this->name;
//         return $msg;
//     }

// }

// $stuObj = new Student("Kumar");
// $stuObj1 = new Student("Kumar 1");
// $stuObj2 = new Student("Kumar 2");

// echo $stuObj->name;

// echo $stuObj2->hi();


//  class pyramid{
      
//     function pyramid($limit=5){
//         $output = "";
//         for($i = 1; $i <= $limit; $i++) {
//             for($j = 1; $j <= $i; $j++) {
//                 $output .= "* ";
//             }
//             $output .= "<br>";
//         }
//            return $output;
//     }

// }

// $pyrobj = new pyramid();
// echo $pyrobj->pyramid(4);

// class pyramid{

//     function pyramid($limit=0){
//         $output ="";
//         for($i=1;$i<=$limit;$i++){
//             for($x=1;$x<=(2-$i);$x++){
//                 echo "&nbsp;&nbsp;";
//             }
//             for($j=1;$j<=$i;$j++){
//                 if($i%2==0){
//                      continue;
//                 }else{
//                     echo"* ";
//                 }
//             }echo"<br>";
//         }
//           return$output;
//     }
// }
// $pyrobj = new pyramid();
// echo $pyrobj->pyramid(7);

// class age{
//     function age($age=0){
//         $output="";
//         if($age >= 18 && $age <=100){
//             $output= "(eligibe to voting)";
            
//             }elseif($age >=0 && $age <=18){
//                     $output="(not eligible for voting)";
//             }else{
//                $output= "(enter a valid value)";
//               }return $output;
//     }
// }
// $ageobj = new age();
// echo $ageobj->age(800);

// echo"<br>";

// class unit{
//     public $value;
//     function sum($oldunit){
//         $this->value= $oldunit;
        
//     }   

//     function unit($unit=0){

//         $output =$this->value;
//     if($unit >=0 && $unit <=50){
//       $output= ($unit *5);
//     }elseif($unit >50 && $unit <=150) {
//        $output= (50*5)+($unit -50)*4;
//     }elseif($unit >150 && $unit <=250){
//        $output= (50*5)+(100*4)+ ($unit - 150) *3;
//     }elseif($unit >= 250 ){
//       $output = (50*5)+(100*4) +(100*3)+ ($unit -250)* 2;
//     }else{
//       $output = "enter a valid unit";
//     }return $output;
//     }

// }

// $unitobj = new unit();
// echo $unitobj->unit(50);

//  class pyramid{
//       function pyramid($limit){
//         $output="";
//         for($i=1;$i<=($limit);$i++){
//             if($i%2==0){
            
//                 continue;
//             }else{
//                 echo$i;
//             }
//         }
//          return$output;
//     }
//  }
// $pyrobj =new pyramid();
// echo $pyrobj->pyramid(15)

// class pyramid{
//     function pyramid($limit=0){
//         $output="";
//          $x=1;
//          for($i=1;$i<=($limit);$i++){
//             for($j=0;$j<$i;$j++){
//                 echo$x;
//                 $x++;
//             }echo"<br>";
//          }
//             return$output;
//     }
// }
// $pyeobj =new pyramid();
// echo$pyeobj->pyramid(5);


// class sum{
//     function sum($a,$b=0){
//      $c =$a+$b;
//      return$c;
//     }
// }
// $sumobj=new sum();
// echo$sumobj->sum(10,10);


// echo"<br>";

// class sum{
//     function sum($a,$b=0,$c=0){
//         $x =$a*$b-$c;
//         return$x;
//     }
// }
// $sumobj=new sum();
// //echo$sumobj->sum(10,20,100);
// //echo$sumobj->sum(10,20);
// echo$sumobj->sum(10);

// class pyramid{
//     function pyramid($limit=0){
//         $output="";
//         for($i=1;$i<=($limit);$i++){
//             for($j=1;$j<$i;$j++){
//                 $x=(($i+$j)%2);
//                 echo$x;
//             }echo"<br>";
//         }
//           return$output;
//     }
// }

// $pyrobj=new pyramid();
// echo$pyrobj->pyramid(6);

// class pyramid{
//     function pyramid($limit){
//        $output="";
//        for($i=1;$i<=($limit);$i++){
//         for($j=1;$j<=5;$j++){
//             if($i==1||$i==5||$i==9||$j==1){
//                 echo"* ";
//             }
//         }echo"<br>";
//        }
//          return$output;
//     }
// }
// $pyrobj =new pyramid();
// echo$pyrobj->pyramid(9);


// class student{
//     public $name;
//     function __construct($n){
//         $this->name=$n;
//     }
//     function name(){
//         $msg="sajjan ".$this->name;
//         return$msg;
//     }
// }
// $stuobj=new student("kulhari");
// echo $stuobj->name();

// class student{
//     public $name,$age;
//     function __construct($n="no name", $a=0){
//         $this->name=$n;
//         $this->age=$a;
//     }
//     function hi(){
//         $msg=$this->name."-".$this->age;
//         return $msg;
//     }
// }

// $stuobj=new student("sajjan",21);
// $stuobj1=new student();
// echo $stuobj->hi()."<br>";
// echo $stuobj1->hi();

// class student{
//     public $name,$age,$salary;
//     function __construct($n="no name",$a=0,$s=0){
//         $this->name=$n;
//         $this->age=$a;
//         $this->salary=$s;
//     }
//     function hi(){
//         $msg=$this->name."-".$this->age."-".$this->salary;
//         return $msg;

//     }
  
// }

// $stuobj=new student("sajjan",21,25000);
// $stuobj1=new student();
// echo $stuobj->hi()."<br>";
// echo $stuobj1->hi();

// class student{

//   public $name;
//   function __construct($n){
//     $this->name=$n;
//   }
//   function hi(){
//     $msg="sajjan ".$this->name;
//     return $msg;
//   }

//      function __destruct() {
//         echo"kulhari";
//      }

// } 

// $stuobj=new student("kumar ");

// echo $stuobj->hi();

?>