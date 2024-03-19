<?php
echo "<h2>Example mix of oprator</h2>";

echo "<bar>";
//$i = 11;
// 1.
// $i = ($i++) + (++$i);
// echo $i;=24
// echo $i;=24

//2.
// $i = (++$i) + ($i++) + (++$i);
// echo $i;  //38
// echo $i; //38

// $a = 11;
// $b = 22;

//3.
// $c = $a + $b + $a++ + $b++;
//     //11     22   11      22
// echo $c; //66


$a = 10;
$b = 15;
$c = 13;

// $d = $a++ + ++$b + $c++ + ($a + $b + $c);
//     11    16     14       38 = 80

//$d = $a++ - ++$b + $c++ + ($a + $b + $c);

//    10   -    16   +  13    +   10 + 15 + 13
//$d = $a++ + ++$b - $c++ + ($a + $b + $c);

//$d = $a++ + ++$b + $c++ - ($a + $b + $c);

// $d = $a + $b - $c + ($a + $b + $c);
// echo $d;

// $a = 10;
// $b = 15;
// $c = 20;

//$d = ($a + ++$b) + $b++ + ($c + ++$a);
    //(10 +  16)   +  15   + (20 + 11)
    //   26        +  15    + 31
    //50

// $d = $b++ + ($c + ++$a);  
	 //15        31
	//46
// $d = $a++ - ++$b;
      //10 - 16
      //-6
//echo $d;      



//string oprator
// ex1

// $a = "This is a ";
// $b = "string oprator. ";
// $c = "its important for sting add value.";

// $d = $a.$b."who use in joint string value.";

// $d = $a.$b." who use in joint string value. ".$c; 



// echo $d;

//$a = 20;
//$b = 25;

//$d = ($a > $b)?"true":"false";  //false

//$d = ($a < $b)?"true":"false";   //true

//$b =20;

//$d = ($a < $b)?"true":"false";  //false

// $d = ($a <= $b)?"true":"false";  //true 

//$d = ($a >= $b)?"true":"false";   //true

//echo $d??"40";
       
//$d = ($a > $b)?"this is true":"this is flase";
//$d = ($a < $b)?"true ":"false, "."becoz A = 20 & b = 20, Both value are equal. so its result are false";

$x = 2;
$y = 3;
$z = 4;

$d = $x+= $x++ + ++$x + --$x;

//$d = $x+= $x++ + ++$y - --$ //12


echo $d;
?>