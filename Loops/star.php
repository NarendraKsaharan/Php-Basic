<?php

for ($row=1; $row <= 10; $row++) { 
	
	for ($pat=1; $pat <= $row; $pat++) { 
		echo "*";
	}
	echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

$row=5;
for($i=1; $i<=5; $i++)
	{
		for($j=1; $j<=$i; $j++)
		{
			echo ' * ';
		}
			echo "<br>";
	}
	for($i=5; $i>=1; $i--)
	{
		for($j=1; $j<=$i; $j++)
		{
			echo ' * ';
		}
		echo "<br>";
	}
?>