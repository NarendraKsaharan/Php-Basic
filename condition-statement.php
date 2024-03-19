<?php

$per = 34;
if($per >= 85) {
    echo "Grade A";
} elseif($per >= 75) {
    echo "Grade B";
} elseif($per >= 60) {
    echo "Grade C";
} elseif($per >= 50) {
    echo "Grade D";
} elseif($per >= 35) {
    echo "Grade E";
} else {
    echo "Fail";
}


// 0-50 unit 3.50/per unit charge
// 51-150 unit 4/per unit charge
// 151-250 unit 5/per unit charge
// >251 unit 6/per unit charge


// $a = 50;
// $b = 110;
// $c = 130;
// $d = 140;

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


// $a = 90;
// $b = 70;
// $c = 80;

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


// Condition Statements

// if -> Single condition
// if else -> 2 conditions
// if elseif else -> multiple conditions
// Switch statement/case

// $n = "S";

// switch($n) {
//     case "M":
//         echo "Monday";
//         break;
//     case "T":
//         echo "Tuesday";
//         break;
//     case "W":
//         echo "Wednesday";
//         break;
//     case "TH":
//         echo "Thursday";
//         break;
//     case "F":
//         echo "Friday";
//         break;
//     case "S":
//         echo "Saturday";
//         break;
//     case "SU":
//         echo "Sunday";
//         break;
//     default:
//         echo "Not a valid week day";
//         break; 
// }


// $a = 40;
// $b = 30;
// $c = 20;
// $d = 10;

// if($a > $b && $a > $c && $a > $d) {
//     echo "A is Big";
// } elseif($b > $c && $b > $d) {
//     echo "B is Big";
// } elseif($c > $d) {
//     echo "C is Big";
// } else {
//     echo "D is Big";
// }

// $a = 100;
// $b = 15;

// $per = 86;



// if($a > $b) {
//     echo "A is Big";
// } else {
//     echo "B is Big";
// }

// if($a > $b) {
//     echo "A is Big";
// }


?>