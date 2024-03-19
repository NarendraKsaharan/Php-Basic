<?php



$sum = 0;
for ($i = 1; $i <= 20; $i++) {
	echo $i;
  if ($i % 2 == 0) {
    $sum += $i;
  }
}

echo "The sum of even numbers between 1 and 20 is: " . $sum;






?>