<?php

//foreach
// $fruits = ['Apple', 'Banana', 'Orange'];
// foreach ($fruits as $fruit) {
//     echo $fruit . " ";
// }
//========================================

//Q.1.write a number 20-40 using loop
// $i = 20;
// for ($i=20; $i <= 40; $i++) { 
//     echo $i;
//     echo "<br>";
// }
// echo "<br>";

// $i = 20;
// while ($i <= 40) {
//     echo $i. "<br>";
//     $i++;
// }
// echo "<br>";

// $i = 20;
// do {
//     echo $i. "<br>";
//     $i++;
// } while ($i <= 40);
// echo "<br>";
//====================================


//Q.2.Sum of even number 1-100
// $sum = 0;
// for ($i=2; $i <=100; $i+=2) { 
//     $sum += $i;
// }
// echo  "Sum of even number 1-100: ".$sum;
// echo "<br>";
//==============================

// Q.3.Sum of odd number 1-100
// $sum = 0;
// for ($i=1; $i <= 99; $i+=2) { 
//     $sum += $i;
// }
// echo $sum;
//==============================

//Q.4.Sum of number 1-5
// $sum = 0;
// for ($i=1; $i <=5; $i++) { 
//     $sum += $i;
// }
// echo $sum;
//============================

// Q.5.Sum of number 7-17
// $sum = 0;
// for ($i=7; $i <= 17; $i++) { 
//     $sum += $i;
// }
// echo $sum;
//==========================

//Q.6.Sum of first n number using
// $n = 20;
// $sum = 0;

// for ($i = 1; $i <= $n; $i++) {
//     $sum += $i;
// }
// echo "Sum of the first " . $n . " numbers: " . $sum;
//==================================

//Q.7.run loop 1-10 which + value only 1-5
// $sum = 0;
// for ($i=1; $i <= 10; $i++) { 
//     if ($i >= 1 && $i <=5) {
//         $sum += $i;
//     }
// }
// echo "sum of beetween 1-5: ". $sum;
//========================================

//Q.8.run loop 20-1 which + value 17-7(both includ)
// $sum = 0;
// for ($i=20; $i >= 1; $i--) { 
//     if ($i >=7 && $i <=17) {
//         $sum += $i;
//     }
// }
// echo "sum of beetween 17-7: ". $sum;
//=============================================

//Q.9.run loop 1-20 and + all sum values
// $sum = 0;
// for ($i=2; $i <=20; $i+=2) { 
//        $sum += $i; 
// }
// echo "sum of even number 1-20: ". $sum;
//===============================================

//Q.10.3 33 333 3333 33333 ....... do with single loop
// $n = 10;
// $number = 0;
// for ($i=1; $i <= $n; $i++) { 
//     $number = $number*10 + 5;
//     echo $number. " ";
// }
//=======================================
    
//Q.10.3 33 333 3333 33333 ....... do with double loop
// $n = 5;
// for ($i=1; $i <=$n; $i++) { 
//     $number = '';
//     for ($j=1; $j <= $i; $j++) { 
//         $number.= '3';
//     }
//     echo $number. " ";
// }
//==========================================

// Q.11. 23 table by loop
// for ($i=1; $i <= 10; $i++) { 
// 	echo ($i)*23 ."<br>";
// }
//============================

// Q.12. table of 2 by loop
// for ($i=2; $i <= 20; $i+=2) { 
// 	echo $i."<br>";
// }
//===========================

//nested loop
//         1
//       1 2
//     1 2 3 
//   1 2 3 4
// 1 2 3 4 5

// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 1; $j <= 5 - $i; $j++) {
//       echo "&nbsp&nbsp ";
//     }
//     for ($k = 1; $k <= $i; $k++) {
//       echo $k . " ";
//     }
//     echo "<br>";
//   }

//===========================================

// 1.
// 1
// 2 3
// 4 5 6
// 7 8 9 10
// 11 12 13 14 15

// $rows = 5;
// $num = 1;

// for ($i = 1; $i <= $rows; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo $num . " ";
//         $num++;
//     }
//     echo "<br>";
// }

// $x = 1;
// for ($i=1; $i <= 6; $i++) { 
//     for ($j=1; $j < $i; $j++, $x++) { 
//         echo $x. " ";
//     }
//     echo "<br>";
// }

//=====================================

// 2.
// 1
// 1 1
// 1 1 1
// 1 1 1 1 
// 1 1 1 1 1

// $x = 1;
// for ($i=1; $i <= 6; $i++) { 
//     for ($j=1; $j < $i; $j++) { 
//         echo $x. " ";
//     }
//     echo "<br>";
// }

// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "1 ";
//     }
//     echo "<br>";
// }

//========================================


// 3.

//         1
//       2 2
//     3 3 3
//   4 4 4 4
// 5 5 5 5 5
// for ($i=0; $i <= 5; $i++) { 
//     for ($j=1; $j <= 5-$i; $j++) { 
//         echo "&nbsp&nbsp";
//     }
//     for ($k=1; $k <= $i; $k++) { 
//         echo $i;
//     }
//     echo "<br>";
// }


// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 5 - $i; $j >= 1; $j--) {
//         echo "&nbsp;&nbsp&nbsp";
//     }

//     for ($k = 1; $k <= $i; $k++) {
//         echo $i . " ";
//     }

//     echo "<br>";
// }
//======================================

// 4.

    //         1
    //       2 3
    //     4 5 6
    //   7 8 9 10
// 11 12 13 14 15


// $x = 1; 
// for ($i = 1; $i <= 5; $i++) {
//     for ($k = 5 - $i; $k >= 1; $k--) {
//         echo "&nbsp;&nbsp;&nbsp;";
//     }
//     for ($j = 1; $j <= $i; $j++, $x++) {
//         echo $x . " ";
//     }

//     echo "<br>";
// }
//================================================

//5.
// 1
// 2 2
// 3 3 3
// 4 4 4 4
// 5 5 5 5 5

// for ($i=1; $i <= 5; $i++) { 
//     for ($j=1; $j <= $i; $j++) { 
//         echo $i. " ";
//     }
//     echo "<br>";
// }
//======================================================

//6.
// 1 2 3 4 5 
// 1 2 3 4 5 
// 1 2 3 4 5 
// 1 2 3 4 5 
// 1 2 3 4 5 

// for ($i=1; $i <= 5; $i++) { 
//     for ($j=1; $j <= 5; $j++) { 
//         echo $j. "&nbsp;";
//     }
//     echo "<br>";
// }
//========================================================
//7.
// 1 1 1 1 1 
// 2 2 2 2 2
// 3 3 3 3 3
// 4 4 4 4 4
// 5 5 5 5 5

// for ($i=1; $i <= 5; $i++) { 
//     for ($j=1; $j <= 5; $j++) { 
//         echo $i. "&nbsp";
//     }
//     echo "<br>";
// }
//=====================================================

//8.
//11 12 13 14 15
//16 17 18 19 20
//21 22 23 24 25
//26 27 28 29 30
//31 32 33 34 35

// for ($i=11; $i <= 35; $i+=5) { 
//     for ($j=$i; $j < $i + 5 ; $j++) { 
//         echo $j. " ";
//     }
//     echo "<br>";
// }
//====================================================

//9.
// 1
// 0 1
// 1 0 1
// 0 1 0 1
// 1 0 1 0 1

// for ($i=1; $i <= 5; $i++) { 
//     for ($j=1; $j <= $i; $j++) { 
//         if (($i + $j)%2 == 0) {
//             echo "1 ";
//         } else {
//             echo "0 ";
//         }
//     }
//     echo "<br>";
// }

// for($i=1;$i<=6;$i++){
//     for($j=1;$j<$i;$j++){
//         echo(($i+$j)%2);
//     }echo"<br>";
// }
//=================================

// 10.
// 5 4 3 2 1
// 5 4 3 2
// 5 4 3
// 5 4
// 5

// for ($i=5; $i >= 1; $i--) { 
//     for ($j=$i; $j >= 1; $j--) { 
//         echo $j;
//     }
//     echo "<br>";
// }


// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 5; $j >= $i; $j--) {
//         echo $j . " ";
//     }
//     echo "<br>";
// }

//======================================



// 11.
// 1
// 1 2
// 1 2 3
// 1 2 3 4
// 1 2 3 4 5
// 1 2 3 4
// 1 2 3
// 1 2
// 1

// for ($i=1; $i <= 5; $i++) { 
//     for ($j=1; $j <= $i; $j++) { 
//         echo $j. " ";
//     }
//     echo "<br>";
// } 
// for ($k=4; $k >= 1; $k--) { 
//     for ($x=4; $x >= (5-$k) ; $x--) { 
//         echo $k. " ";
//     }
//     echo "<br>";
// }
//========================================

//12.
// 1
// 1 2 
// 1 2 3 
// 1 2 3 4
// 1 2 3 4 5

// for ($i=1; $i <= 5; $i++) { 
//     for ($j=1; $j <= $i; $j++) { 
//         echo $j. "&nbsp";
//     }
//     echo "<br>";
// }

// for ($i=1; $i <= 6; $i++) { 
//     for ($j=1; $j < $i; $j++) { 
//         echo $j. " ";
//     }
//     echo "<br>";
// }
//========================================

// 13.
// 5 4 3 2 1
//   4 3 2 1
//     3 2 1
//       2 1
//         1

// for ($i=5; $i >= 1; $i--) { 
//     for ($j=$i; $j >= 1; $j--) { 
//        echo $j. "&nbsp ";
//     }
//     echo "<br>";
// }

// for ($i = 0; $i < 5; $i++) {
   
//     for ($k = 0; $k < $i; $k++) {
//         echo "&nbsp;&nbsp;&nbsp;";
//     }
//     for ($j = 5 - $i; $j >= 1; $j--) {
//         echo $j . " ";
//     }

//     echo "<br>";
// }
//========================================

// 14.
// 5 5 5 5 5
//   4 4 4 4 
//     3 3 3 
//       2 2
//         1

// for ($i=5; $i >= 1; $i--) { 
//     for ($k=5 - $i; $k > 0; $k--) { 
//         echo "&nbsp&nbsp&nbsp";
//     }
//     for ($j=1; $j <= $i ; $j++) { 
//         echo $i . " ";
//     }
//     echo "<br>";
// }
//=======================================

// 15.
// 1 2 3 4 5 
// 2 3 4 5 
// 3 4 5 
// 4 5 
// 5

// for ($i=1; $i <= 5; $i++) { 
//     for ($j=$i; $j <= 5; $j++) { 
//         echo $j. "&nbsp";
//     }
//     echo "<br>";
// }
//=======================================

// 16.
// 5  5  5  5  5 
// 4  4  4  4 
// 3  3  3 
// 2  2 
// 1 

// for ($i=5; $i >= 1; $i--) { 
//     for ($j=$i; $j >= 1; $j--) { 
//        echo $i. "&nbsp ";
//     }
//     echo "<br>";
// }
//========================================

// 17.
// 5  4  3  2  1 
// 4  3  2  1 
// 3  2  1 
// 2  1 
// 1 

// for ($i=5; $i >= 1; $i--) { 
//     for ($j=$i; $j >= 1; $j--) { 
//        echo $j. "&nbsp ";
//     }
//     echo "<br>";
// }
//=====================================

// 18.
// 5
// 5 4
// 5 4 3
// 5 4 3 2
// 5 4 3 2 1

// for ($i=5; $i >= 1; $i--) { 
//     for ($j=5; $j >= $i; $j--) { 
//         echo $j. " ";
//     }
//     echo "<br>";
// }
//=====================================
// 19.
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
//==========================================

// 20.
//         1
//       1 2 1
//     1 2 3 2 1 
//   1 2 3 4 3 2 1
// 1 2 3 4 5 4 3 2 1

// for($i=1;$i<=5;$i++){
//     for($x=1;$x<=(5-$i);$x++){
//         echo"&nbsp;&nbsp;&nbsp;";
//      } for($j=1;$j<=$i;$j++){
//             echo$j. " ";
//         }for($b=1;$b<$i;$b++){
//          $z =$i-$b;
//          echo$z. " ";
//         }
//         echo"<br>";
//     }

// 13.
//Name print

//star print
// 1.
// * * * * *
// * * * *
// * * *
// * *
// *

// for ($i=5; $i >= 1; $i--) { 
//     for ($j=$i; $j >= 1 ; $j--) { 
//         echo "* ";
//     }
//     echo "<br>";
// }
//=======================================

// 2.
// *
// * *
// * * *
// * * * *
// * * * * *

// for ($i=1; $i <= 5; $i++) { 
//     for ($j=1; $j <= $i; $j++) { 
//         echo "* ";
//     }
//     echo "<br>";
// }
//===========================================

// 3.
// * * * * *
//   * * * *
//     * * *
//       * *
//         *

// for ($i = 1; $i <= 5; $i++) {
   
//     for ($k = 1; $k < $i; $k++) {
//         echo "&nbsp;&nbsp;&nbsp;";
//     }
//     for ($j = $i; $j <= 5; $j++) {
//         echo "* ";
//     }
//     echo "<br>";
// }//================================

// 4.
//         *
//       * *
//     * * * 
//   * * * *
// * * * * *

// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 1; $j <= 5 - $i; $j++) {
//       echo "&nbsp&nbsp ";
//     }
//     for ($k = 1; $k <= $i; $k++) {
//       echo "* ";
//     }
//     echo "<br>";
//   }
//=========================================

// 5.
//         * 
//       * * * 
//     * * * * * 
//   * * * * * * *
// * * * * * * * * * 


// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 5 - $i; $j >= 1; $j--) {
//         echo "&nbsp;&nbsp;&nbsp;";
//     }
//     for ($j = 1; $j <= 2 * $i - 1; $j++) {
//         echo "* ";
//     }
//     echo "<br>";
// }
//==========================================


// 6.
        
//         * 
//       * * * 
//     * * * * * 
//   * * * * * * *
// * * * * * * * * * 
//   * * * * * * *
//     * * * * * 
//       * * * 
//         *

// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 5 - $i; $j >= 1; $j--) {
//         echo "&nbsp;&nbsp;&nbsp;";
//     }
//     for ($j = 1; $j <= 2 * $i - 1; $j++) {
//         echo "* ";
//     }
//     echo "<br>";
// }

// for ($i = 4; $i >= 1; $i--) {
//     for ($j = 4 - $i; $j >= 1; $j--) {
//         echo "&nbsp;&nbsp;&nbsp;&nbsp;";
//     }
//     for ($j = 1; $j <= 2 * $i - 1; $j++) {
//         echo "* ";
//     }

//     echo "<br>";
// }

//================================================

// calculate factorial of a number using for loop
// $num = 3;
// $factorial = 1;

// for ($x=$num; $x>=1; $x--)
// {
//     $factorial = $factorial * $x;
// }

// echo "The factorial of $num is $factorial";

//===============================================

// A recursive function is a function that calls itself.

// function factorial($number) {

//     if ($number < 2) {
//         return 1;
//     } else {
//         return ($number * factorial($number-1));
//     }
// }

// echo factorial(4);
// =======================================================

//table print

// Write a PHP program using nested for loop that creates a chess board.
// ?>
<!-- //     <table width="400px" cellspacing="0px" cellpadding="0px" border="1px"> -->
<?php
// for($row=1;$row<=8;$row++)
// {
// 	echo "<tr>";
// 	for($column=1;$column<=8;$column++)
// 	{
// 		$total=$row+$column;
// 		if($total%2==0)
// 		{
// 			echo "<td height=35px width=30px bgcolor=#FFFFFF></td>";
// 		}
// 		else
// 		{
// 			echo "<td height=35px width=30px bgcolor=#000000></td>";
// 		}
// 	}
// 	echo "</tr>";
// }
// ?>
<!-- // </table> -->

<!-- <table width="400px" cellpadding="0" cellspacing="0" border="2px" align="center">
     -->
	<?php

// for ($row=1; $row <=8 ; $row++) { 
// 	echo "<tr>";
// 	for ($col=1; $col <= 8; $col++) { 
// 		$sum = $row + $col;
// 		if ($sum % 2 == 0) {
// 			echo "<td width=25px height=25px bgcolor=gray></td>";
// 		}
// 		else{
// 			echo "<td width=25px height=25px bgcolor=lightgreen></td>";
// 		}
// 	}
// 	echo "</tr>";
// }



	?>

</table>
<?php


//Name exercise 

//         *                 
//        * *              
//       *   *           
//      *     *              
//     * * * * *        
//    *         *       
//   *           *   
//  *             *      
// *               *  

// for ($i=1; $i <= 9; $i++) { 
//     for ($j=1; $j <= 17; $j++) { 
//         if ($j == 10 - $i || $j == 8 + $i) {
//             echo "* ";
//         }elseif ($i == 5) {
//             if ($j == 7 || $j == 9 || $j == 11) {
//                 echo "*";
//             }else {
//                 echo "&nbsp;&nbsp;";
//             }
//         }else {
//             echo "&nbsp;&nbsp;";
//         }
//     }
//     echo "<br>";
// }

//========================================================================

// *****
// *    *
// *    *
// ******
// *    *
// *    *
// *****

for ($i=1; $i <= 7 ; $i++) { 
    for ($j=1; $j <= 6 ; $j++) { 
        if ($i == 1 || $i == 7 && $j <= 5 ) {
            echo "* ";
        }
    }
}

//======================================================================================

// * *  *  *    
// *          *     
// *            *
// *            *
// *            *
// *            *
// *           *     
// * *  *  *    

// for ($i=1; $i <= 8 ; $i++) { 
//     for ($j=1; $j <= 6; $j++) { 
//         if ($j == 1) {
//             echo "* ";
//         }elseif ($i == 1 || $i == 8) {
//             if ($j == 2 || $j == 3 || $j == 4) {
//                 echo "* &nbsp;";
//             } else {
//                 echo "&nbsp;";
//             }
//         } elseif ($i == 2 || $i == 7) {
//             if ($j == 5) {
//                 echo "* ";
//             }else {
//                 echo "&nbsp;&nbsp;&nbsp;&nbsp;";
//             }
//         } elseif ($i == 3 || $i == 4 || $i == 5 || $i == 6) {
//             if ($j == 6) {
//                 echo "* ";
//             }else {
//                 echo "&nbsp;&nbsp;&nbsp;&nbsp;";
//             }

//         }
//         else {
//             echo "&nbsp;";
//         }
//     }
//     echo "<br>";
// }

//===================================================================

// *****
// *
// *****
// *
// *****

// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 1; $j <= 5; $j++) {
//       if ($i == 1 || $i == 5 || $i == 3) {
//         echo "*";
//       } elseif ($i == 2 && $j == 1) {
//         echo "*";

//       } elseif ($i == 4 && $j == 5) {
//         echo "*";
//       } else {
//         echo " ";

//       }
//     }
//     echo "<br>";
//   }

//======================================================

// * * * * *
// *
// *
// * * * * *
// *
// *
// *

//===========================================================

// *       *
// *       *
// *       *
// * * * * *
// *       *
// *       *
// *       *


// for($a =1;$a <=7;$a++){
//     for($x =1;$x <=5;$x++){
//       if($a ==4||$x ==1||$x ==5){
//         echo"* ";
//       } else {
//         echo "&nbsp;&nbsp; ";
       
  
//       }
//     } echo "<br>";
//   }

// for($a =1;$a <=7;$a++){
//   for($x =1;$x <=5;$x++){
//     if($a ==1||$a ==4 || $x==1){
//       echo"* ";
//     }
//   }echo"<br>";
// }


//=========================================================

// * * * * *
//     *
//     *
//     *
//     *
//     *
// * * * * *    



// for($a =1;$a <=7;$a++){

//   for($x =1;$x <=5;$x++){
          
//     if($a ==1||$a ==7 || $x == 3){

//            echo "* ";

//     }else {

//         echo  "&nbsp;&nbsp ";

//     }

//   } echo "<br>";

// }

//===========================================================

// *           *
// * *       * *
// *   *   *   *
// *     *     *
// *           *
// *           *

// for ($i=1; $i <= 6 ; $i++) { 
//     for ($j=1; $j <= 7 ; $j++) { 
//         if ($j == 1 || $j ==7) {
//             echo "* ";
//         } elseif ($i == 2 ) {
//             if ($j == 2 || $j == 6) {
//                 echo "* ";
//             } else {
//                 echo "&nbsp;&nbsp;&nbsp;";
//             }
                
//         } elseif ( $i == 3) {
//             if ($j == 3 || $j == 5) {
//                 echo "* ";
//             } else {
//                 echo "&nbsp;&nbsp;&nbsp;";
//             }
//         } elseif ($i == 4 && $j == 4) {
//                 echo "* ";
//         }
//          else {
//             echo "&nbsp;&nbsp;&nbsp;";
//         }
//     }
//     echo "<br>";
// }

//=================================================

// *           *
// **          *
// *  *        *
// *    *      *
// *      *    *
// *        *  *
// *          **
// *           *

// for ($i=1; $i <=8; $i++) { 
//     for ($j=1; $j <= 8; $j++) { 
//         if ($j == 1 || $j == 8 || ($i == $j)){
//         echo "*";
//         }else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
//     echo "<br>";
//   }
//   echo "<br>";

//===========================================================

// * * * *  
// *      *
// * * * *  
// *      *
// *      *

//single loop

// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 1; $j <= 5; $j++) {
//       if ($j == 1 || ($i == 1 && $j < 5) || ($i == 3 && $j < 5) || ($j == 5 && ($i == 2 || $i == 4 || $i == 5))) {
//         echo "*";
//       } else {
//         echo "&nbsp;&nbsp;";
//       }
//     }
//     echo "<br/>";
//   }

//double loop

// for ($i = 1; $i <= 5; $i++) { 
//     for ($j= 1; $j <= 5 ; $j++) { 
//         if ($j== 1 || $j== 5 || $i == 1 || $i == 5 ) {
//             echo "*  &nbsp;";
//         } else {
//             echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
//         }
//     }
//     echo "<br>";
// }
// for ($i=1; $i <= 5 ; $i++) { 
//     for ($j=1; $j <= 6; $j++) { 
//         if ($j == 1 || $j == $i +1) {
//             echo "* ";
//         } else {
//             echo "&nbsp;&nbsp;&nbsp;&nbsp;";
//         }
//     }
//     echo "<br>";
// }
// echo "<br><br>";

//==========================================================

//    * *    
// *       *
// *          
//    * *    
//         *
// *       *
//    * *    

// for ($i=1; $i <= 7 ; $i++) { 
//     for ($j=1; $j <= 4; $j++) { 
//         if ($i == 1 || $i == 4 || $i == 7) {
//             if ($j == 2 || $j == 3 ) {
//                 echo "* ";
//             } else {
//                 echo "&nbsp;&nbsp;&nbsp;";
//             }
//         } elseif ($i == 2 || $i == 6) {
//                 if ($j == 1 || $j == 4) {
//                     echo "* ";
//                 }else {
//                     echo "&nbsp;&nbsp;&nbsp;";
//                 }
//         } elseif ($i == 3 && $j == 1) {
//              echo "* ";
//         }  elseif ($i == 5 && $j == 4) {
//              echo "* ";
//         } else {
//             echo "&nbsp;&nbsp;&nbsp;";
//         }
//     }
//     echo "<br>";
// }

//====================================================

// * * * * *
//     *
//     *
//     *
//     * 
//     * 
//     *


// for($a =1;$a <=7;$a++){
// for($x =1;$x <=5;$x++){
      
//  if ($a == 1 || $x == 3){

//    echo "* ";

//  } else {

//    echo  "&nbsp;&nbsp ";
   
//  }

// } echo "<br>";
// }


//=================================================

// *              *
//  *            *
//   *          *
//    *        *
//     *      *
//      *    *
//       *  *
//        *   

// for ($i=1;  $i <= 8; $i++) { 
//     for ($j=1; $j <= 15; $j++) { 
//         if ($j == $i || $j == 16- $i) {
//             echo "* ";
//         }else{
//             echo "&nbsp;&nbsp;";
//         }
//     }
//     echo "<br>";
// }

//=========================================================

// * * * * * *
//           *
//         *   
//       *     
//     *       
//   *         
// * * * * * *

// for ($i = 1; $i <= 7; $i++) {
//     for ($j = 1; $j <= 6; $j++) {
//       if ($i == 1 || $i == 7 || $j == (8 - $i)) {
//         echo "* ";
//       } else {
//         echo "&nbsp;&nbsp;";
//       }
//     }
//     echo "<br/>";
//   }

?>