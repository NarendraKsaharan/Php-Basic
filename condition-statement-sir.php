<?php
// Condition Statements

// if -> Single condition
// if else -> 2 conditions
// if elseif else -> multiple conditions
// Switch statement/case

$n = "S";

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


$a = 40;
$b = 30;
$c = 20;
$d = 10;

if($a > $b && $a > $c) {
    echo "A is Big";
} elseif($b > $c) {
    echo "B is Big";
} else {
    echo "C is Big";
}

// $a = 100;
// $b = 15;

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

// if($a > $b) {
//     echo "A is Big";
// } else {
//     echo "B is Big";
// }

// if($a > $b) {
//     echo "A is Big";
// }


?>