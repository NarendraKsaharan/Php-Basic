<?php



for ($i = 2; $i <= 100 ; $i+=2) { 
	echo $i;
}
echo "<br>";
echo "<br>";

for ($i=1; $i <= 99; $i+=2) { 
	echo $i;
}
echo "<br>";
echo "<br>";

$sum = 0;
for ($i=2; $i <=100 ; $i+=2) { 
	$sum += $i;
}
echo "Sum of even number 1-100 is $sum. <br>";
echo "<br>";

$sum = 0;
for ($i=1; $i <=99 ; $i+=2) { 
	$sum += $i;
}
echo "Sum of odd number 1-100 is $sum. <br>";
echo "<br>";


 $output = 0;
$i = 1;
while ($i <= 10) {
	if ($i <= 5 and $i >=1) {
	$output += $i;
	}
	echo $i; 

	$i++;
} echo "<br> Sum of number 1-5 is ". $output ."<br>";
echo "<br>";

 $output = 0;
$i = 20;
while ($i >= 1) {
	if ($i <= 17 and $i >= 7) {
	$output += $i;
	}
	echo $i;   
	$i--;
	} 
echo "<br> Sum of number 7-17 is $output . <br>";
echo "<br>";

echo "<h2>Sum of n number using do-while loop</h2>";
echo "<p>n=5</p>";
$output = 0;
$i = 1;
do{
	$output += $i;
	$i++;
} while ($i <= 5);
echo "Sum of number 5 is ". $output ."<br>";

echo "<h2>Sum of n number using while loop</h2>";
echo "<p>n=8</p>";
$output = 0;
$i = 1;
while ($i <= 8) {
	  $output += $i; 
	$i++;
} echo "Sum of number 8 is ". $output ."<br>";

echo "<h2>Sum of n number using For loop</h2>";
echo "<p>n=10</p>";
$output = 0;
for ($i=1; $i <= 10; $i++) { 	
	$output += $i;   //$output = $output + $i;
}
echo "Sum of number 10 is ". $output ."<br>";


//sum of n=5 by for looping
// $output = 0;
// for ($i=1; $i <= 5; $i++) { 	
// 	$output += $i;   //$output = $output + $i;
// }
// echo $output;

echo "<h2>Table of 3 do while loop</h2>";	
$i = 3;
do {
	echo $i;
	$i+=3;
} while ($i <= 30);

//table of 2 by looping Do While
// $i = 1;
// do{
// 	echo ($i)*2 ."<br>";
// 	$i++;
// } while ($i <= 10);

//table of 3 by looping while
// $i = 3;
// while ($i <= 30) {
// 	echo $i ."<br>";    
// 	$i+=3;
// }

//table of 2 by looping while
// $i = 1;
// while ($i <= 10) {
// 	echo ($i)*2 ."<br>";    
// 	$i++;
// }


//table of 2 by looping for
// for ($i=2; $i <= 20; $i+=2) { 
// 	echo $i."<br>";
// }

//23 table by for looping for
// for ($i=1; $i <= 10; $i++) { 
// 	echo ($i)*23 ."<br>";
// }



//reverce by for looping
// for ($i=10; $i >= 1; $i--) { 
// 	 echo $i."<br>";
// }


// $output = 0;
// for ($i=1; $i <= 10 ; $i++) { 
// 	echo $i. "<br>";
// 	if ($i <=5 and $i >= 1) {
// 		$output += $i;
// 	}
// }
//  echo "Sum of n=5(1-5) number is $output";
//  echo "<br>";

//  $output = 0;
//  for ($i=20; $i >=1 ; $i--) { 
//  	echo $i. "<br>";
//  	if ($i <=17 and $i >= 7) {
//  		$output += $i;
//  	}
//  }
//  echo "Sum of 7-17 number is $output. <br>";


?>
