<?php
echo "<h2>Logical Operator</h2>";
 // fun-> &&/and , ||/or , !

// 1. And/&&
$a = true;
$b = true;
$c = false;

// Example 1

// $d = ($a && $b);

// var_dump($d);

// example 2
// $d = ($a && $b and $c);

// var_dump($d);

// $a = true;
// $b = true;
// $c = true;

// Example 3
// $d = ($a && $b and $c);

// var_dump($d);

// $a = true;
// $b = false;
// $c = true;

// // Example 3
// $d = ($a && $b and $c);

// var_dump($d);



// 2.||/or

$a = true;
$b = true;
$c = true;

// Example 1
// $d = ($a || $b || $c);

// var_dump($d);

// bool(true)

// example 2

// // $a = true;
// // $b = false;
// // $c = false;

// $d = ($a || $b || $c);

// var_dump($d);

// bool(true)

// example 3
// $a = false;
// $b = false;
// $c = false;

// $d = ($a || $b || $c);

// var_dump($d);

// bool(false)


// 3.!not

$a = true;
$b = true;
$c = false;

// example 1

$d = !($a || $b || $c);

var_dump($d);

// bool(false)
// bevcoz ! change to output result opsite
?>