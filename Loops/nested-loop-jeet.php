<?php

// Nested loop


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

// echo "<table border='1' cellspacing='0'>";
// for($i = 1; $i <= 5; $i++)
// {
//     echo "<tr>";
//     for($j = 1; $j <= 10; $j++) 
//     {
//         echo "<td> * </td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";


// for($i = 1; $i <= 5; $i++)
// {
//     for($j = 1; $j <= $i; $j++) 
//     {
//         echo "* ";
//     }
//     for($j = 1; $j <= $i; $j++) 
//     {
//         echo "* ";
//     }
//     echo "<br>";
// }

//         * 
//       * *
//     * * *
//   * * * *
// * * * * * 
//    * * *
//  *       *
// *         *
// *         *
// *         *
// * * * * * *
// *         *
// *         *
// *         *

// Exercises---------
// 1 
// 1 2
// 1 2 3
// 1 2 3 4
// 1 2 3 4 5


// 1 
// 2 2
// 3 3 3
// 4 4 4 4
// 5 5 5 5 5

// * * * * *
// *
// *
// * * * *
// *
// *
// * * * * *

// echo "*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>";
// echo "******<br><br><br><br>";

// for($i = 1; $i <= 7; $i++)
// {

//     if($i == 1 || $i == 4 || $i == 7)
//     {
//         //$lpNo = ($i==4)?4:5;
//         if(!($i == 1 || $i == 7)){
//             for($k = 1; $k <= 5; $k++) {
//                 echo "&nbsp;";
//             }
//         }

//         for($j = 1; $j <= (($i==4)?4:5); $j++) 
//         {
//             echo "* ";
//         }
//     } else {
//         for($k = 1; $k <= 5; $k++) {
//             echo "&nbsp;";
//         }
//         echo "*";
//     }
    
//     echo "<br>";
// }

// for($i = 1; $i <= 1000; $i++) {
//     $no = $i;
//     $oldNo = $no;
//     $total = 0;
//     while($no > 0) {
//         $num = $no%10;
//         $total += $num**3;
//         $no = (int)($no/10);
//         //echo $no;
//         //die;
//     }
//     if($oldNo == $total) {
//         echo "_$oldNo is Armstong No.<br>";
//     }
//     // } else {
//     //     echo "$oldNo is Not an Armstong No.<br>";
//     // }
// }

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


?>