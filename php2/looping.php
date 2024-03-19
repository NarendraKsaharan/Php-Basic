<?php
//1-20 -> 1 2 3....10 15 16 17 18 19 20;

// for( intilization ; condition ; increment/decremnt) {
// }
// break , continue

// for($i =1; $i <=20; $i++){
//     if($i ==11|| $i ==12 ||$i ==13||$i ==14){
//      continue;
//     }else{
//  echo "$i";
//  echo"<br>";
//     }
 
//  }

//15-1 -> 15 14 .....8

/*
for($a =15;$a >= 1;$a--){
      if($a ==7){
        break;
      }
echo $a;
    echo "<br>";
}
*/

//1-5 -> (1+2+3+4+5) =15

/*
$a =0;
for($b =1;$b <=5;$b++){
   $a =$a+$b;


}

echo $a;
*/

//1*2=2
//2*2=4
//3*2=6
//4*2=8
//5*2=10
//6*2=12
//7*2=14
//8*2=16
//9*2=18
//10*2=20

/*
$a =2;
for($x =1;$x <=10;$x++){


    echo "$a*$x=".$a*$x." ";
    echo"<br>";

}
*/
  // $even = 0;//sam value
  // $odd = 0;//visam value

 //for($a = 1; $a <= 19; $a++)
 //{
   //  if($a%2 == 0) {
     //    $even++;//2,4,6,8,10,12,14,16,18,
     //} else {
       //  $odd++;//1,3,5,7,9,11,13,15,17,19,
//}
//}
 //echo "Total Even value is $even<br>";
 //echo "Total Odd value is $odd<br>";

 /*
$even =0;   //sam value
$odd =0;    //visam value

for($a= 1;$a <=19;$a++){
if($a%2 ==0){
    $even++;  //2 4 6 8 10 12 14 16 18
}else{
    $odd++;  // 1 3 5 7 9 11 13 15 17
}

}
echo "total even value is $even<br>";
echo "total odd value is $odd<be>";

*/


// while
//1-20 -> 1 2 3....10 15 16 17 18 19 20;
/*
$a =1;
while($a <=20){
  if($a == 11|| $a == 12 || $a == 13 || $a == 14){
    $a++;
    continue;
  }else{
    echo$a;
    echo"<br>";
  }
   
$a++;
}
*/
//15-1 -> 15 14 .....8
/*
$a =15;
while($a>=1){
if($a == 7){
  break;

}else{
  echo$a;
} echo"<br>";
$a--;
}
*/
//1-5 -> (1+2+3+4+5) =15
/*
$a = 0;
$x =1;
while($x <=5){
$a =$a+$x;
$x++;
}
echo$a;


//1*2=2
//2*2=4
//3*2=6
//4*2=8
//5*2=10
//6*2=12
//7*2=14
//8*2=16
//9*2=18
//10*2=20


// $a =2;
// $x =1;
// while($x <=10){
// echo "$a*$x=".$a*$x."";
// echo"<br>";
// $x++;
// }

//sam value visam value

// $even = 0;//sam value
//  $odd = 0;//visam value
//  $a =1;
// while($a <=20){
//   if($a%2 ==0){
//     $even++;  //2 4 6 8 10 12 14 16 18
//   }else{
//     $odd++;  // 1 3 5 7 9 11 13 15 17 19
//  } $a++;
// }
// echo "total even value is $even<br>";
// echo "total odd value is $odd<be>";

//do while
//1-20 -> 1 2 3....10 15 16 17 18 19 20;

/*
$a =1;
do{
echo$a."<br>";
$a++;
}while($a <=20)
*/

/*
$a =25;
$b =15;
$c =$a +$b;  //40
$a =$c -$a;   //15
$b =$c -$a;    //25
//echo "$a";
echo $b;
*/

// $a =10;
// $isprime ="true";
// for($x = 1;$x <= 1;$x++){
//   if($a%2==1){
//     echo $x."Yes prime number";
//   }else{
//     echo"Not is prime number";
//   }
  
// }
 
?>