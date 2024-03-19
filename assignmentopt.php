
<?php
echo "<h2>Assignment oprators</h2>";

// assignopretor
// =, +=, -=, /=, *=, **=

$a = 30;
$b = 20;

$a += $b;    //a = a + b, a=50
$b += $a;   //b=70

echo "B:  ".$b;
echo "<br>";

echo $a * $b;

echo "<br>";
echo "B= B-A:  ".$b -= $a;

echo "<br>";

$b -= $a;  //b=20
echo  "B:  ".$b;
echo "<br>";

echo "A:  ".$a;
echo "<br>";
echo "B:  ".$b;
echo "<br>";
echo "<br>";
echo "<br>";
echo "A:  ".$a;
echo "<br>";
echo $b += $a;  //b=-30,a=50   b=


echo "<br>";

echo $a /= $b;
echo "<br>";

echo $a %= $b;
echo "<br>";
echo "<br>";


$a = 20;
$b = 10;

$a -= $b;  //a=10
$b += $a;  //b=30

echo "Mul of  A & B is:  ".$a *= $b;
echo "<br>";
echo "<br>";

// echo "Div of B & A is=  ".$b /= $a;
echo "<br>";
echo "<br>";
echo "a= ".$a;
echo "<br>";
echo "b= ".$b;

$b /= $a;   //b=3
echo $b;
echo "<br>";
$a = 50;
echo "<br>";
echo $b %= $a;


?>