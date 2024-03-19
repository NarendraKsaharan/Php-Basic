<?php

// 1  3  5  7  9  10  11  12  13  14  15

// for($i = 1; $i <= 15; $i++)
// {
//     if($i == 2 || $i == 4 || $i == 6 || $i == 8) {
//         continue;
//     }
//     echo $i."&nbsp;&nbsp;";
// }


// 0  1  1  2  3  5  8  13  21

// $a =0;
// $b =1;
// $c =0;

// for($i = 1; $i <=9;$i++){
//     echo$a;
//     $a+=$b;
//     $b =$c;
//     $c =$a;
//     echo"<br>";
// }

// 0  1  0  1  0  1  6  7  8  9  10 

// for($i =0;$i <=10;$i++){
//     if($i <=5){
//         echo($i%2)."&nbsp;&nbsp;";
//     }else{
//         echo$i."&nbsp;&nbsp;";
//     }
// }
// echo"<br>"; 
// 0  1  0  1  0  1  1  0  1  0  1  0


// for($i =0;$i <=12;$i++){
//     if($i ==6){
//         continue;
//     }echo($i%2)."&nbsp;&nbsp;";
// }

// for($i =0;$i <=11;$i++){
//     if($i <=5){
//         echo($i%2)."&nbsp;&nbsp";
//     }else{
//         echo(($i+1)%2)."&nbsp;&nbsp;";
        

//     } 
// }

// for($i =0;$i <=5;$i++){
//     echo($i%2)."&nbsp;&nbsp;";
// }for($j =1;$j <=5;$j++){
//     echo($j%2)."&nbsp;&nbsp;";
// }


//1
//1 2
//1 2 3
//1 2 3 4
//1 2 3 4 5
// for($i =1;$i <=5;$i++){
//     for($j =1;$j <=$i;$j++){
//         echo$j;
//     }echo"<br>";
// }

//1
//2 3
//4 5 6
//7 8 9 10
// $x =1;
// for($i =1;$i<=4;$i++){
//     for($j=1;$j<=$i;$j++){
//         echo$x;
//         $x++;
//     }echo"<br>";
// }


//5
//4 4
//3 3 3
//2 2 2 2
//1 1 1 1 1
// for($i=5;$i>=1;$i--){
//     for($j=5;$j>=$i;$j--){
//         echo$i;
//     }echo"<br>";
// }
//1
//0 1
//1 0 1
//0 1 0 1
//1 0 1 0 1
// for($i=1;$i<=6;$i++){
//     for($j=1;$j<$i;$j++){
//         echo(($i+$j)%2);
//     }echo"<br>";
// }

// 1
// 2 2
// 3 3 3 
// 4 4 4 4
// 5 5 5 5 5
// 4 4 4 4
// 3 3 3 
// 2 2
// 1 
// for($i=1;$i<=5;$i++){
//     for($j=1;$j<=$i;$j++){
//         echo"$i ";
//     }echo"<br>";
// }for($x=4;$x>=1;$x--){
//     for($z=4;$z>=(5-$x);$z--){
//         echo"$x ";
//     }echo"<br>";
// }

// 1 1 1 1 1
//   2 2 2 2 
//     3 3 3 
//       4 4 
//         5
//       4 4
//     3 3 3 
//   2 2 2 2 
// 1 1 1 1 1
// for($i=1;$i<=5;$i++){
//   for($x=1;$x<=($i-1);$x++){
//     echo"&nbsp;&nbsp; ";
//   }  for($j=5;$j>=$i;$j--){
//     echo"$i ";
// }echo"<br>";
// }for($i=4;$i>=1;$i--){
//     for($x=1;$x<=($i-1);$x++){
//       echo"&nbsp;&nbsp; ";
//     }  for($j=5;$j>=$i;$j--){
//       echo"$i ";
//   }echo"<br>";
//   }
//         1
//       1 2 1
//     1 2 3 2 1 
//   1 2 3 4 3 2 1
// 1 2 3 4 5 4 3 2 1
// for($i=1;$i<=5;$i++){
//     for($x=1;$x<=(5-$i);$x++){
//         echo"&nbsp;&nbsp;";
//      } for($j=1;$j<=$i;$j++){
//             echo$j;
//         }for($b=1;$b<$i;$b++){
//          $z =$i-$b;
//          echo$z;
//         }
//         echo"<br>";
//     }





// 1
// 2 1
// 3 2 1
// 4 3 2 1 
// 5 4 3 2 1
// for($i=1;$i<=6;$i++){
//    for($j=1;$j<$i;$j++){
//       $x =$i-$j;
//       echo$x;
//    }echo"<br>";
// }
   //0 1 1 2 3 5 8 13 21 34 55 89 144 .........

   // $a =0;
   // $b=1;
   // $c=0;
   // for($i=0;$i<=13;$i++){
   //    echo$a;
   //    $a+=$b;
   //    $b=$c;
   //    $c=$a;
   // }

//  0  1  5  12  22  35  51  70  92  117  145 .......
// $a=0;
// $b=1;
// $c=3;
// for($i=0;$i<=11;$i++){
//  echo  $a;
//  $a+=$b;
//  $b+=$c;
// }

//1 3 5 7 9 11 13 15 

// for($i = 1;$i <=15;$i++){
//     if($i%2==0){
//         continue;
//     }else{
//         echo$i;
//     }
// }

// 1 1 1 1 1 0 0 0 0 0
// $a=1;
// $b=0;
//   for($i=1;$i<=10;$i++){
//    if($i<=5){
//       echo$a."&nbsp;&nbsp;";
//    }else{
//       echo$b."&nbsp;&nbsp;";
//    }
//   } 

//   *
// * * *
// * * * * *
// * * * * * * *

// for($i = 1; $i <=7; $i++){
//    for($x=1;$x<=(2-$i);$x++){
//       echo"&nbsp;&nbsp;";
//    }
//    for($j=1;$j<=$i;$j++){
//      if($i%2==0){
//       continue;
//      }else{
//       echo"* ";
//      }
//    }echo "<br>";
// }

// //======================================================================================================================
// //1
// //1 2
// //1 2 3
// //1 2 3 4
// //1 2 3 4 5
// for($i=1;$i<=5;$i++){
//    for($j=1;$j<=$i;$j++){
//       echo$j;
//    }
//    echo"<br>";
// }
// echo"<br>";echo"<br>";echo"<br>";
// //1
// //2 3
// //4 5 6
// //7 8 9 10
// $a=1;
// for($i=1;$i<=4;$i++){
//    for($j=1;$j<=$i;$j++){
//       echo$a;
//       $a++;
//    }
//    echo"<br>";
// }
// echo"<br>";echo"<br>";echo"<br>";
// //5
// //4 4
// //3 3 3
// //2 2 2 2
// //1 1 1 1 1
// for($i=5;$i>=1;$i--){
//    for($j=5;$j>=$i;$j--){
//       echo$i;
//    }
//    echo"<br>";
// }
// /*
// * * * * *
// *
// *
// * * * *
// *
// *
// * * * * *
// */
// echo"<br>";echo"<br>";echo"<br>";
//   for($i=1;$i<=7;$i++){
//    for($j=1;$j<=5;$j++){
//       if($i==1||$i==4||$i==7||$j==1){
//          echo"*";
//       }
//    }
//    echo"<br>";
// }
//1
//0 1
//1 0 1
//0 1 0 1
//1 0 1 0 1
     
// echo"<br>";echo"<br>";echo"<br>";
// for($i=1;$i<=6;$i++){
//    for($j=1;$j<$i;$j++){
//       echo(($i+$j)%2);
//    }
//    echo"<br>";
// }
    
/*
* * * * *
    *
    *
    *
    *
    *
* * * * *    
*/
// for($i=1;$i<=7;$i++){
//    for($j=1;$j<=5;$j++){
//       if($i==1||$i==7||$j==3){
//          echo"*";
//       }else{
//          echo"&nbsp&nbsp";
//       }
      
//    }
//    echo"<br>";
// }
/*
 * * * * *
     *
     *
     *
     * 
     * 
   */
//   for($i=1;$i<=7;$i++){
//    for($j=1;$j<=5;$j++){
//       if($i==1||$j==3){
//          echo"*";
//       }else{
//          echo"&nbsp&nbsp";
//       }
//    }
//    echo"<br>";
//   }
  

/*
*       *
*       *
*       *
* * * * *
*       *
*       *
*       *
*/
// for($i=1;$i<=7;$i++){
//    for($j=1;$j<=5;$j++){
//       if($i==4||$j==1||$j==5){
//          echo"*";
//       }else{
//          echo"&nbsp&nbsp";
//       }
//    }
//    echo"<br>";
// }
/*
* * * * *
*       * 
*       *
* * * * *
*       * 
*       *
*       *
*/
// for($i=1;$i<=7;$i++){
//    for($j=1;$j<=5;$j++){
//       if($i==1||$i==4||$j==1||$j==5){
//          echo"*";
//       }else{
//          echo"&nbsp&nbsp";
//       }
//    }
//    echo"<br>";
// }

//0 - 50 -> per unit price 5
//51 - 150 -> per unit price 4
//151 - 250 -> per unit price 3
//> 251 -> per unit price 2

// $unit =251;
// if($unit >= 0 && 50>=$unit){
//    echo($unit*5);
// }elseif($unit >50 && 150 >= $unit){
//    echo( (50*5)+($unit-50)*4);
// }elseif($unit > 150 && 250 >= $unit){
//    echo((50*5)+(100*4)+($unit-150)*3);
// }elseif($unit >= 250){
//    echo((50*5)+(100*4)+(100*4)+($unit-250)*2);
// }

/*
* * * * *
*   *   *
*   *   *
*   *   *
*   *   *
*   *   *
*/
// for($i=1;$i <=6;$i++){
//    for($j=1;$j <=5;$j++){
//       if($j==1||$j==3||$j==5||$i==1){
//          echo"* ";
//       }else{
//          echo"&nbsp&nbsp ";
//       }
//    }
//    echo"<br>";
// }

// 1
// 2 2
// 3 3 3 
// 4 4 4 4
// 5 5 5 5 5
// 4 4 4 4
// 3 3 3 
// 2 2
// 1 
// for($i=1;$i<=5;$i++){
//    for($j=1;$j<=$i;$j++){
//       echo$i;
//    }
//    echo"<br>";
// }
// for($x =4;$x>=1;$x--){
//    for($a=1;$a<=$x;$a++){
//       echo$x;
//    }
//    echo"<br>";
// }
// $i=1;
// while($i<=5){
//    $j=1;
//    while($j<=$i){
//       echo$i;
//       $j++;
//    }
//    $i++;
//    echo"<br>";
// }
// $i=4;
// while($i>=1){
//    $j=1;
//    while($j<=$i){
//       echo$i;
//       $j++;
//    }
//    $i--;
//    echo"<br>";
// }
// $i=1;
// do{
//    $j=1;
//    do{
//       echo$i;
//       $j++;
//    }while($j<=$i);
//    echo"<br>";
//    $i++;
// }while($i<=5);
// $i=4;
// do{
//    $j=1;
//    do{
//       echo$i;
//       $j++;
//    }while($j<=$i);
//    echo"<br>";
//    $i--;
// }while($i>=1);

// 1 1 1 1 1
//   2 2 2 2 
//     3 3 3 
//       4 4 
//         5
//       4 4
//     3 3 3 
//   2 2 2 2 
// 1 1 1 1 1

// $i=1;
// while($i<=5){
//    $j=1;
//    while($j<=($i-1)){
//       echo"&nbsp&nbsp";
//       $j++;
//    }
//    $k=5;
//    while($k>=$i){
//       echo$i;
//       $k--;
//    }
//    $i++;
//    echo"<br>";
// }
// $a=4;
// while($a>=1){
//    $s=1;
//    while($s<=($a-1)){
//       echo"&nbsp&nbsp";
//       $s++;
//    }
//    $d=5;
//    while($d>=$a){
//       echo$a;
//       $d--;
//    }
//    echo"<br>";
//    $a--;
// }


// for($i=1;$i <=5;$i++){
//    for($j=1;$j <=($i-1);$j++){
//        echo"&nbsp;&nbsp;";
//    }for($k=1;$k <=(6-$i);$k++){
//       echo$i;
//    }
//    echo"<br>";
// }for($a=4;$a >=1;$a--){
//    for($s=1;$s <=($a-1);$s++){
//       echo"&nbsp;&nbsp";
//    }for($d=1;$d <=(6-$a);$d++){
//       echo$a;
//    }
//    echo"<br>";
// }
//         1
//       1 2 1
//     1 2 3 2 1 
//   1 2 3 4 3 2 1
// 1 2 3 4 5 4 3 2 1
// $i=1;
// while($i<=5){
//    $j=1;
//    while($j<=(5-$i)){
//       echo"&nbsp&nbsp";
//       $j++;
//    }
//    $k=1;
//    while($k<=$i){
//       echo$k;
//       $k++;
//    }
  
//    $l=1;
//    while($l<$i){
//       $a=$i-$l;
//       echo$a;
//       $l++;
//    }
//    $i++;
//    echo"<br>";
// }

// for($i=1;$i <=5;$i++){
//    for($j=1;$j <=(5-$i);$j++){
//       echo"&nbsp;&nbsp;";
//    }for($k=1;$k <=$i;$k++){
//       echo$k;
//    }for($a=1;$a < $i;$a++){
//       $x = $i-$a;
//          echo$x;
      
//    }
//    echo"<br>";

// }

// 1 
// 2 1
// 3 2 1
// 4 3 2 1
// 5 4 3 2 1
// for($i=1;$i <=6;$i++){
//    for($j=1;$j < $i;$j++){
//       $a =$i-$j;
//       echo$a;
//    }
//    echo"<br>";
// }


   //           1
   //         2 1
   //       3 2 1
   //     4 3 2 1 
   //   5 4 3 2 1
   // for($i=1;$i <=6;$i++){
   //    for($j=1;$j <=(6-$i);$j++){
   //      echo"&nbsp;&nbsp;";
   //    }for($k=1;$k < $i;$k++){
   //       $a =$i-$k;
   //       echo$a;
   //    }
   //    echo"<br>";
   // }

 //0 1 1 2 3 5 8 13 21 34 55 89 144 .........
//  $a =0;
//  $b=1;
//  $c=0;
//  for($i=1;$i <=13;$i++){
//    echo$a;
//    $a+=$b;
//    $b=$c;
//    $c=$a;
//  }
 
 //  0  1  5  12  22  35  51  70  92  117  145 .......
//  $a=0;
//  $b=1;
//  $c=3;
//  for($i=1;$i <=10;$i++){
//    echo$a;
//    $a+=$b;
//    $b+=$c;

//  }

//   *
// * * *
// * * * * *
// * * * * * * *
// for($i=1;$i <=7;$i++){
//    for($j=1;$j <=(2-$i);$j++){
//       echo"&nbsp;&nbsp;";
//    }for($k=1;$k <=$i;$k++){
//       if($i%2==0){
//          continue;
//       }else{
//          echo"* ";
//       }
//    }
//    echo"<br>";
// }

// 1 1 1 1 1 0 0 0 0 0

// $a=1;
// $b=0;
// for($i=1;$i <=10;$i++){
//    if($i<=5){
//       echo$a."&nbsp;&nbsp";
//    }else{
//       echo$b."&nbsp;&nbsp";
//    }
// }

// 1 0 1 0 1 1 0 1 0 1
// for($i=1;$i <=10;$i++){
//    if($i<=5){
//       echo($i%2);
//    }else{
//       echo(($i+1)%2);
//    }
// }

//    1 
//   2 3 
//  4 5 6 
// 7 8 9 10
// $a=1;
// for($i=1;$i<=4;$i++){
//    for($j=1;$j<=(4-$i);$j++){
//       echo"&nbsp;&nbsp;";
//    }for($k=1;$k<=$i;$k++){
//       echo$a."&nbsp;&nbsp;";
//       $a++;
//    }
//    echo"<br>";
// }


//     *
//    *** 
//   *****
//  *******
// ********* 
//  *******
//   *****
//    ***
//     *
// for($i=1;$i<=9;$i++){
//    for($j=1;$j<=(9-$i);$j++){
//       echo"&nbsp;&nbsp";
//    }for($k=1;$k<=$i;$k++){
//       if($i%2==0){
//          continue;
//       }else{
//          echo"*"."&nbsp;&nbsp;";
//       }
//    }
//    echo"<br>";
// }for($a=7;$a>=1;$a--){
//    for($s=1;$s<=(8-$a);$s++){
//       echo"&nbsp;&nbsp;";
//    }for($z=1;$z<=$a;$z++){
//       if($a%2==0){
//          continue;
//       }else{
//          echo"*"."&nbsp;&nbsp; ";
//       }
//    }
//    echo"<br>";
// }

//5
//4 4
//3 3 3 
//2 2 2 2 
//1 1 1 1 1

// for($i=5;$i>=1;$i--){
//    for($j=5;$j>=$i;$j--){
//        echo$i;
//    }
//    echo"<br>";
// }
// $i=5;
// while($i>=1){
//    $j=5;
//    while($j>=$i){
//       echo$i;
//       $j--;
//    }
//    echo"<br>";
//    $i--;
// }
// $i=5;
// do{
//    $j=5;
//    do{
//       echo$i;
//       $j--;
//    }while($j>=$i);
//    echo"<br>";
//   $i--;
// }while($i>=1);
// $i=1;
// while($i<=5){
//    $j=1;
//    while($j<=(5-$i)){
//       echo"&nbsp;&nbsp;";
//       $j++;
//    }
//    $k=1;
//    while($k<=$i){
//       echo$i;
//       $k++;
//    }
//    $i++;
//    echo"<br>";
// }
// $i=1;
// do{
//    $j=1;
//    do{
//       echo "&nbsp;&nbsp;";
//       $j++;
//    }while($j<=(6-$i));
//    $k=1;
//    do{
//       echo$i;
//       $k++;
//    }while($k<=$i);
//    echo"<br>";
//    $i++;
// }while($i<=5);

//  * *
//* * * *
//* * * * * *
//* * * * * * * *
//* * * * * * * * * * 

// for($i=1;$i<=10;$i++){
//    for($j=1;$j<=(3-$i);$j++){
//        echo"&nbsp;&nbsp; ";
//    }for($k=1;$k<=$i;$k++){
//       if($i%2==1){
//          continue;
//       }else{
//       echo"* ";
//       }
//    }
//    echo"<br>";
// }

// //                * *
// //            * * * *
// //        * * * * * *
// //    * * * * * * * *
// //* * * * * * * * * * 

// for($i=1;$i<=10;$i++){
//    for($j=1;$j<=(10-$i);$j++){
//        echo"&nbsp;&nbsp; ";
//    }for($k=1;$k<=$i;$k++){
//       if($i%2==1){
//          continue;
//       }else{
//       echo"* ";
//       }
//    }
//    echo"<br>";
// }


// 1 3 5 7 9 10 11 12 13 14 15
// for($i=1;$i<=15;$i++){
//    if($i<=9){
//       if($i%2==0){
//          continue;
//       }else{
//          echo$i."&nbsp;&nbsp;";
//       }
//    }else{
//       echo$i."&nbsp;&nbsp;";
//    }
// }
// $i=1;
// do{
//    if($i<9){
//    echo$i." ";
//    $i+=2;
//    }else{
//       echo$i." ";
//       $i++;     
//    }  
// }while($i<=15);


// $i=1;
// while($i<=15){
//    if($i<9){
//       echo$i." ";
//       $i+=2;
//    }else{
//       echo$i." ";
//       $i++;
//    }
// }


//1 3 5 7 9 10 11 12 13 14 15 17 19 21 23 25
// for($i=1;$i<=25;$i++){
//    if($i<=8 ||15<=$i){
//       if($i%2==0){
//          continue;
//       }else{
//          echo$i."&nbsp;&nbsp;";
//       }
//    }else{
//       echo$i."&nbsp;&nbsp;";
//    }
// }


   // do while loop

//1 3 5 7 9 11 13 15
// $i =1;
// do{
//    echo$i."<br>";
//    $i+=2;
// }while($i<=15);

// for($i=1;$i<=15;$i+=2){
//     echo"$i"."&nbsp;&nbsp;";
// }

//1 4 7 10 13 16 19 21
// $a=1;
// do{
//    if($a<=19){
//       echo$a."&nbsp;&nbsp;"; 
//    }else{
//       echo($a-1)."&nbsp;&nbsp;";
//    }
//    $a+=3;
// }while($a<=22);

// for($i=1;$i<=22;$i+=3){
//    if($i<=19){
//    echo$i."&nbsp;&nbsp;";
//    }else{
//       echo($i-1);
//    }
// }

//while loop

// $i=1;
// while($i<=15){
//    echo$i."&nbsp;&nbsp;";
//    $i+=2;
// }
// $i=1;
// while($i<=22){
//    if($i<=19){
//    echo$i."&nbsp&nbsp";
//    }else{
//       echo($i-1);
//    }
//    $i+=3;
// }

// function sum($age){
//     $age1="";
// if($age >= 18 && $age <=100){
//    $age1= "(eligibe to voting)";

// }elseif($age >=0 && $age <=18){
//    $age1="(not eligible for voting)";
// }else{
//    $age1= "(enter a valid value)";
//   }return $age1;
// }

// echo sum(10);

function sum($age){
   $output="";
   if($age>=0 && 18>=18){
      $output="not valid";
   }elseif($age>=18 && 100<=$age){
       $output="vaild";
   }else{
      $output="enter a vaild age";
   }
   return;$output;
}
echo sun(2);

?>