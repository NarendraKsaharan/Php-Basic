<?php




function pyramid($n) {
    for ($m = 1; $m <= $n; $m++) {
        for ($q = 1; $q <= $m; $q++) {
                echo "$q ";
        }
        echo "<br>";
    }
}

pyramid(4);

pyramid(8);
pyramid(12);
// function hiMsg() {
//     return "Hi, PHP!";
// }

// function sum($a, $b) {
//         $c = ($a + $b);
//         return $c;
// }

//     $total = sum(10, "sdf");
//     echo $total;
//     echo "<br>";


// $total = sum(20, 30);
// echo $total;
// echo "<br>";

// $total = sum(40, 30);
// echo $total;
// echo "<br>";

// $total = sum(50, 30);
// echo $total;
// echo "<br>";

// $total = sum(60, 30);
// echo $total;
// echo "<br>";

// $msg = hiMsg();
// echo $msg;

?>
