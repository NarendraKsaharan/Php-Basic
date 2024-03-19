<?php
echo "<h2>Conditional operators";
echo "<br>";

 // ?:(ternary oprator),??(Null coalesecing)

 // 1.?: ternary oprator

$a = 10;
$b = 20;

$c = ($a > $b)?$a:$b;

echo $c;

echo "<br>";

$output = ($a > $b)?"true":"false";

echo $output;


echo "<br>";

// 2.Null coalesecing
$a = 10;
$b = 20;

$age = $age??"Nulls";

echo $age;

$sonu =$sonu??"kumar";

echo "<br>";
echo $sonu;







?>