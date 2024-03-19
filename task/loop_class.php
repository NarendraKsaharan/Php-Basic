<?php
// Loop Statement
// For
// While
// Do while
// foreach

// for( intilization ; condition ; increment/decremnt) {
// }
// break , continue

//print 1-10 number

//for loop

// for ($i=1; $i <= 10; $i++) { 
//     echo $i;
//     echo "<br>";
// }

//print 10-1
// for ($i=10; $i >= 1; $i--) { 
//     echo $i;
//     echo "<br>";
// }

//while loop
// $i = 1;
// while ($i <= 10) {
//     echo $i. "<br>";
//     $i++;
// }

//Do While
// $i = 1;
// do {
//     echo $i. "<br>";
//     $i++;
// } while ($i <= 10);

//table of 2
// for ($i=2; $i <= 20; $i+=2) { 
//     echo $i. "<br>";
// }

//==========================================

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

//=============================================

//prime number

// $a =5;
// $isprime ="true";
// for($x = 1;$x <= 1;$x++){
//   if($a%2==1){
//     echo $x."Yes prime number";
//   }else{
//     echo"Not is prime number";
//   }
// }

//================================

// Odd/Even NUmber Count

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
// echo "total odd value is $odd<br>";

//==============================================

//1-20 -> 1 2 3....10 15 16 17 18 19 20;

// for($i =1; $i <=20; $i++){
//     if($i ==11|| $i ==12 ||$i ==13||$i ==14){
//      continue;
//     }else{
//  echo "$i";
//  echo"<br>";
//     }
 
//  }

//====================================================

?>

<?php
// for($i = 1; $i <= 5; $i++)
// {
//     for($j = 1; $j <= 5; $j++) 
//     {
//         echo "* ";
//     }
//     echo "<br>";
// }


// * * * * * 
// * * * * * 
// * * * * * 
// * * * * * 
// * * * * * 
?>

<!-- <table width="800px" height="600px" cellpadding="0" cellspacing="0" align="center"> -->
    <?php

// for ($row=1; $row <= 10; $row++) { 
//     echo "<tr>";
//     for ($col=1; $col <= 8; $col++) { 
//         $sum = $row + $col;
//         if ($sum % 2 == 0) {
//             echo "<td width=25px height=25px bgcolor=#e3e1e4></td>";
//         }
//         else{
//             echo "<td width=25px height=25px bgcolor=lightgreen></td>";
//         }
//     }
//     echo "</tr>";
// }



    ?>

<!-- </table> -->
<!-- <table border="1" cellpadding="5" cellspacing="0">
<?php
    // for($i = 1; $i <= 5; $i++)
    // {
    //     echo "<tr>";
    //     for($j = 1; $j <= 5; $j++) {
    //         echo "<td>".$i."</td>";
    //     }
    //     echo "</tr>";
    // }
    ?>
</table> -->

<?php
// for($i = 1; $i <= 5; $i++)
// {
//     echo "<tr>";
//     for($j = 1; $j <= 5; $j++) {
//         echo "<td>".$i."</td>";
//     }
//     echo "</tr>";
// }
?>
<!-- </table> -->

<?php

// for ($i = 1; $i <= 5; $i++) {
// for ($j = 1; $j <= 5 - $i; $j++) {
// echo "_ ";
// }
// for ($k = 1; $k <= $i; $k++) {
// echo $k . " ";
// }
// echo "<br>";
// }


// _ _ _ _ 1
// _ _ _ 1 2
// _ _ 1 2 3
// _ 1 2 3 4
// 1 2 3 4 5

// $rows = 5;

// $num = 1;

// for ($i = 1; $i <= $rows; $i++) {
// for ($j = 1; $j <= $i; $j++) {
//     echo $num . " ";
//     $num++;
// }
// echo "<br>";
// }

// $x = 1;
// for ($i=1; $i <= 6; $i++) { 
// for ($j=1; $j < $i; $j++, $x++) { 
//     echo $x. " ";
    
// }
// echo "<br>";
// }

// 1
// 2 3
// 4 5 6
// 7 8 9 10
// 11 12 13 14 15





// for($i = 5, $k = 1; $i >= 1; $i--)
// {
//     for($j = 1; $j <= $i; $j++, $k++)
//     {
//         echo "* ";
//     }
//     echo "<br>";
// }


// for($i = 5; $i >= 1; $i--)
// {
//     for($j = $i; $j >= 1; $j--)
//     {
//         echo "* ";
//     }
//     echo "<br>";
// }



// * * * * *
// * * * *
// * * *
// * *
// *


// for($i = 1; $i <= 5; $i++)
// {
//     for($j = 1; $j <= $i; $j++)
//     {
//         echo "* ";
//     }
//     echo "<br>";
// }



// *
// * *
// * * *
// * * * *
// * * * * *




// for($i = 1; $i <= 5; $i++)
// {
//     for($j = 1; $j <= $i; $j++)
//     {
//         echo $i." ";
//     }
//     echo "<br>";
// }

// 1
// 2 2
// 3 3 3
// 4 4 4 4
// 5 5 5 5 5




// for($i = 1; $i <= 5; $i++)
// {
//     for($j = 1; $j <= $i; $j++)
//     {
//         echo $j." ";
//     }
//     echo "<br>";
// }

// 1
// 1 2 
// 1 2 3 
// 1 2 3 4
// 1 2 3 4 5


// for($i = 1; $i <= 5; $i++){
//     for($j = 1; $j <= 5; $j++) {
//         echo $j." ";
//     }
//     echo "<br>";
// }

// 1 2 3 4 5 
// 1 2 3 4 5 
// 1 2 3 4 5 
// 1 2 3 4 5 
// 1 2 3 4 5 


// for($i = 1; $i <= 5; $i++){
//     for($j = 1; $j <= 5; $j++) {
//         echo $i." ";
//     }
//     echo "<br>";
// }

// 1 1 1 1 1 
// 2 2 2 2 2
// 3 3 3 3 3
// 4 4 4 4 4
// 5 5 5 5 5

//=====================================================
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- Year -->
<!-- <select name="year">
    <?php
    // for($i = 2023; $i >= 1975; $i--) {
    //     echo "<option>$i</option>";
    // }
    ?>
</select> -->




</body>
</html>

<?php
//loop print single digit when condition is false
// $i = 11;

// do {
//     echo "The number is: $i \n";
//     $i++;
// } while ($i <= 10);
//=============================================


//Name class

// * * * * *
// *
// *
// * * * *
// *
// *
// * * * * *

// for($i = 1; $i <= 7; $i++)
// {
//     if($i == 1 || $i == 4 || $i == 7)
//     {
//         $n = 5;
//         if($i==4) {
//             $n = 4;
//         }
//         for($j = 1; $j <= $n; $j++) {
//             echo "* ";
//         }
//     } else {
//         echo "*";
//     }
//     echo "<br>";
// }




?>