<?php

class student{
   public $name;

   function set_name($name){
    $this -> name = $name;
          
   }
   function get_name(){
    return $this -> name;
   }

}

// $student1 = new student();
// $student1 -> set_name("jeet");
// echo $student1 -> get_name();

// echo "<br>";

// $student2 = new student();
// $student2 -> set_name("jaat");
// echo $student2 -> get_name();




class calculation{

    protected $a;
    protected $b;
    protected $d;

    function __construct($x, $y ,$z=0){
         
          $this->a = $x;
          $this->b = $y;
          $this->d = $z;
    }
    function sum(){
        
        
        $c = $this->a + $this->b + $this->d ;
        return $c;
    }
    function minus(){
        $c = $this->a - $this->b - $this->d;
        return $c;
    }
    function multiply(){
       if($this->d == 0){
        $this->d = 1;
       }
        $c = $this->a * $this->b *$this->d;
        return $c;
    }
    function divide(){
        if($this->d == 0){
            $this->d = 1;
           }
        $c = $this->a / $this->b / $this->d;
        return $c;
    }
    function modul(){
        $c = $this->a % $this->b % $this->d;
        return $c;
    }
    function power(){
         if($this->d == 0){
            $this->d = 1;
           }
        $c = $this->a ** $this->b ** $this->d;
        return $c;
    }
}

// $ob1 = new calculation(4,2,2);
// echo $ob1 ->sum();
// echo "<br>";
// echo $ob1 ->minus();
// echo "<br>";
// echo $ob1 ->multiply();
// echo "<br>";
// echo $ob1 ->divide();
// echo "<br>";
// echo $ob1 ->modul();
// echo "<br>";
// echo $ob1 ->power();

class summary extends calculation
{

  function   getsummary(){
     $total = "sum of a+b = ". $this->sum()."<br>"."minus a-b = ". $this->minus()."<br>".
     "multiply of a*b = ".$this->multiply()."<br>"."divide of a/b = ".$this->divide()."<br>".
     "modul of a%b = ".$this->modul()."<br>"."power of a**b = ".$this->power();
     return $total;
   }

}

$ob2 = new summary(2,2);
echo $ob2 ->getsummary();













?>