<?php
// Condition Statements

// if -> Single condition
// if else -> 2 conditions
// if elseif else -> multiple conditions
// Switch statement/case

// $a = 20;
// $b = 10;

// if ($a > $b) {
//     echo "A is Big";
// }

//-------------------------

// if($a > $b) {
//     echo "A is Big";
// } else {
//     echo "B is Big";
// }

//-----------------------------------

// $per = 86;
// if($per >= 85) {
//     echo "Grade A";
// } elseif($per >= 75) {
//     echo "Grade B";
// } elseif($per >= 60) {
//     echo "Grade C";
// } else {
//     echo "Fail";
// }

//------------------------------------

// $a = 40;
// $b = 30;
// $c = 60;

// if($a > $b && $a > $c) {
//     echo "A is Big";
// } elseif($b > $c) {
//     echo "B is Big";
// } else {
//     echo "C is Big";
// }

//---------------------------------------

// $a = 10;
// $b = 20;
// $c = 30;

// if($a > $b) {
//     if($a > $c) {
//         echo "A";
//     } else {
//         echo "C";
//     }
// } else {
//     if($b > $c) {
//         echo "B";
//     } else {
//         echo "c";
//     }
// }

//--------------------------------------

// $a = 10;
// $b = 20;
// $c = 30;
// $d = 40;

// if($a > $b) {
//     if($a > $c) {
//         if($a > $d) {
//             echo "A";
//         } else {
//             echo "D1";
//         }
//     } else {
//         if($c > $d) {
//             echo "C1";
//         } else {
//             echo "D2";
//         }
//     }
// } else {
//     if($b > $c) {
//         if($b > $d) {
//             echo "B";
//         } else {
//             echo "D3";
//         }
//     } else {
//         if($c > $d) {
//             echo "C2";
//         } else {
//             echo "D4";
//         }
//     }
// }

//----------------------------------------

$n = "p";

switch($n) {
    case "M":
        echo "Monday";
        break;
    case "T":
        echo "Tuesday";
        break;
    case "W":
        echo "Wednesday";
        break;
    default:
        echo "Not a valid week day";
        break;
}


?>