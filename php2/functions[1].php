<?php
/*
function hello(){
   $msg ="hi php class";
    return $msg;
}
$res =hello();
echo $res;
*/


/*
function sum( $a , $b =0){
$c= ($a+$b);
return $c;
}

echo sum(10 , 20);
echo"<br>";

echo sum(10 , 30);
echo"<br>";


echo sum(10 , 40);
echo"<br>";


echo sum(10 , 50);
echo"<br>";


echo sum(10 , 60);
echo"<br>";


echo sum(10);
echo"<br>";
*/
/*
function sum( $a , $b =0){
    $c= ($a-$b);
    return $c;
    }
    
    echo sum(20 , 10);
    echo"<br>";
    
    echo sum(30 , 10);
    echo"<br>";
    
    
    echo sum(40 , 30);
    echo"<br>";
    
    
    echo sum(60 , 50);
    echo"<br>";
    
    
    echo sum(70 , 60);
    echo"<br>";
    
    
    echo sum(10);
    echo"<br>";
*/
  
/*
function sum( $a , $b =1){
    $c= ($a * $b);
    return $c;
    }
    
    echo sum(10 , 20);
    echo"<br>";
    
    echo sum(10 , 30);
    echo"<br>";
    
    
    echo sum(10 , 40);
    echo"<br>";
    
    
    echo sum(10 , 50);
    echo"<br>";
    
    
    echo sum(10 , 60);
    echo"<br>";
    
    
    echo sum(10);
    echo"<br>";

    */

  /*  
function sum( $a , $b =1){
    $c= ($a / $b);
    return $c;
    }
    
    echo sum(10 , 20);
    echo"<br>";
    
    echo sum(10 , 30);
    echo"<br>";
    
    
    echo sum(10 , 40);
    echo"<br>";
    
    
    echo sum(10 , 50);
    echo"<br>";
    
    
    echo sum(10 , 60);
    echo"<br>";
    
    
    echo sum(10);
    echo"<br>";
*/
  
/*
function sum( $a , $b =1){
    $c= ($a % $b);
    return $c;
    }
    
    echo sum(10 , 5);
    echo"<br>";
    
    echo sum(10 , 3);
    echo"<br>";
    
    
    echo sum(10 , 4);
    echo"<br>";
    
    
    echo sum(10 , 5);
    echo"<br>";
    
    
    echo sum(10 , 6);
    echo"<br>";
    
    
    echo sum(10);
    echo"<br>";
*/

/*
function sum( $a , $b =0){
    $c= ($a ** $b);
    return $c;
    }
    
    echo sum(10 , 2);
    echo"<br>";
    
    echo sum(10 , 3);
    echo"<br>";
    
    
    echo sum(10 , 4);
    echo"<br>";
    
    
    echo sum(10 , 5);
    echo"<br>";
    
    
    echo sum(10 , 6);
    echo"<br>";
    
    
    echo sum(10);
    echo"<br>";
   */
/*
   function sum($a , $b =0,$c =0){
     $x =($a + $b + $c);
   return $x;
   }
   echo sum(10 , 20 ,30);
   echo"<br>";

   echo sum(10 ,  30);
   echo"<br>";

   echo sum(10 , 20 );
   echo"<br>";
*/
/*
  function sum($a , $b =0 , $c =0){
    $x = ($a - $b - $c);
    return $x;

  }
  echo sum(30 , 20 , 10);
   echo"<br>";

   echo sum(30 , 10);
   echo"<br>";

   echo sum(30 , 20 );
   echo"<br>";

*/

/*
function sum($a , $b =1 , $c =1){
    $x = ($a * $b * $c);
    return $x;

  }
  echo sum(30 , 20 , 10);
   echo"<br>";

   echo sum(30 , 10);
   echo"<br>";

   echo sum(30 , 20 );
   echo"<br>";
  */
  /* 
  function sum($a , $b =1 , $c =1){
    $x = ($a / $b / $c);
    return $x;

  }
  echo sum(60 , 20 , 10);
   echo"<br>";

   echo sum(30 , 10);
   echo"<br>";

   echo sum(30 , 20 );
   echo"<br>";
*/

/*
function sum($a , $b =1 , $c =1){
    $x = ($a % $b % $c);
    return $x;

  }
  echo sum(30 , 20 , 10);
   echo"<br>";

   echo sum(30 , 10);
   echo"<br>";

   echo sum(30 , 20 );
   echo"<br>";
*/

/*
function sum($a , $b =0 , $c =0){
    $x = ($a ** $b ** $c);
    return $x;

  }
  echo sum(3 , 2, 1);
   echo"<br>";

   echo sum(3 , 1);
   echo"<br>";

   echo sum(3 , 2 );
   echo"<br>";
*/

/*
function pyramid($limit = 5) {
    $output = "";
    for($i = 1; $i <= $limit; $i++) {
        for($j = 1; $j <= $i; $j++) {
            $output .= "sajjan ";
        }
        $output .= "<br>";
    }

    return $output;
}

echo pyramid(5);
echo pyramid(7);
echo pyramid(10);
echo pyramid(15);
echo pyramid(20);
echo pyramid(23);
echo pyramid(25);

*/


// function sum($age){
    
// if($age >= 18 && $age <=100){
// $output= "(eligibe to voting)";

// }elseif($age >=0 && $age <=18){
//         $output="(not eligible for voting)";
// }else{
//    $output= "(enter a valid value)";
//   }return $output;
// }

// echo sum(20);


/*
function sum($unit){

    $output ="";
if($unit >=0 && $unit <=50){
  $output= ($unit *5);
}elseif($unit >50 && $unit <=150) {
   $output= (50*5)+($unit -50)*4;
}elseif($unit >150 && $unit <=250){
   $output= (50*5)+(100*4)+ ($unit - 150) *3;
}elseif($unit >= 250 ){
  $output = (50*5)+(100*4) +(100*3)+ ($unit -250)* 2;
}else{
  $output = "enter a valid unit";
}return $output;
}
echo sum(250.5);

 */


//         1
//       1 2 1
//     1 2 3 2 1 
//   1 2 3 4 3 2 1
// 1 2 3 4 5 4 3 2 1


// function pyramid($limit =5){
//    $output="";


// for($a =1;$a <=$limit;$a++){
//   for($x= 1;$x <=(5-$a);$x++){
//     $output .= "&nbsp;&nbsp;";
//   }for($c =1;$c <=$a;$c++){
//    $output .="$c";
//   }for($s =1;$s <$a;$s++){
//     $z =$a-$s;
//     $output .="$z";
//   }
//     $output .="<br>";
    
//   }   
//   return $output;
// }
   
// echo pyramid(6);



// 1 1 1 1 1
//   2 2 2 2 
//     3 3 3 
//       4 4 
//         5
//       4 4
//     3 3 3 
//   2 2 2 2 
// 1 1 1 1 1

// function pyramid($limit =7){
//    $output = "";


// for($a =1;$a <=$limit;$a++){
//   for($c =1;$c <= ($a-1);$c++){
//    $output .="&nbsp;&nbsp;";
//   }

//  for($x =5;$x >=$a;$x--){
//        $output .="$a";
//  }
//   $output .="<br>";
// }
//  for($a =4;$a >=1;$a--){
//    for($c =1;$c <=($a-1);$c++){
//      $output .="&nbsp;&nbsp;";
//    }
//    for($x =5;$x >=$a;$x--){
//      $output .="$a";
//    }
//     $output .="<br>";
 
//   }return $output;
    
// }
//  echo pyramid(5);


// 1
// 2 2
// 3 3 3 
// 4 4 4 4
// 5 5 5 5 5
// 4 4 4 4
// 3 3 3 
// 2 2
// 1 

// function pyramid($limit =5){
// $output ="";
// for($a =1;$a <=5;$a++){
//   for($x =1;$x <=$a;$x++){
//     $output .="$a";
//   }
//      $output .="<br>";
// }
// for($z =4;$z >=1;$z--){
//   for($c =1;$c <=$z;$c++){
//     $output .="$z";
//   }
//     $output .="<br>";
// }return $output;
// }
// echo pyramid(5);
?>