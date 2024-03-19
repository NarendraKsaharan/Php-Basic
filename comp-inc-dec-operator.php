<?php

// Comparision Operator -> bool
// ==, ===, !=, !==, >, >=, <, <=, <=>

// $x = 10;
// $y = 20;

//$z = (($x == $y) === ($x != $y));
//var_dump($z); // false 

//$z = ($x <=> $y);
//$z = ($x <= $y);
//$z = ($x >= $y);
//$z = ($x !== $y);
//$z = ($x === $y);

// Increment/Decrement Operators
// ++ (pre/post increment), --(pre/post decrement)

$x = 10;
$x = $y = 20;
++$x;
$x++;
--$y;
--$y;
++$y;
$x++;
$x++;
++$x;
$y++;
$y++;
echo $x; // 15 25 
echo $y; // 20 22




//++$x;



?>