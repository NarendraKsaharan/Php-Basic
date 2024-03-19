<?php
include_once('functions.php');


function pyramid($limit) {
    $output = "";
    for($i = 1; $i <= $limit; $i++) {
        for($j = 1; $j <= $i; $j++) {
            $output .= "* ";
        }
        $output .= "<br>";
    }
    return $output;
}


echo pyramid(5);
// echo pyramid(10);

// echo pyramid(15);




// function sum($a, $b, $c = 0) {

//     $total = $a + $b + $c;
//     return $total;

// }

echo sum(10, 20, 10, 40);
echo "<br>";
echo sum(30, 25, 40);






// function sum($a, $b) {

//     $total = $a + $b + 1;
//     return $total;

// }

// echo sum(10, 20);
// echo "<br>";
// echo sum(30, 25);
// echo "<br>";
// echo sum(30, 50);




// function hello()
// {
//     return "Hello !!!!";
// }

// echo hello();

// $op = hello();
// echo $op;



// function hello()
// {
//     echo "Hello !!!!";
// }
// hello();


?>