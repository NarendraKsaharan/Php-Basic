<?php

echo "<h2>Increment & Decriment</h2>";
// echo "<br>";
echo "<h5>Example-1:</h5>";

$x = 10;
$y = 12;

++$x;
$x++;
--$y;
++$x;
$y++;
$x++;
--$x;
++$y;
$y++;
--$x;
++$y;
$x++;
$y++;

echo "X = ".$x;
echo "<br>";
echo "Y = ".$y;

echo "<h5>Example-2:-</h5>";

$x = $y = 15;

++$x;
--$y;
$y--;
$x++;
--$x;
--$x;
++$y;
$y--;
$y++;
$x--;
++$y;

echo "X : ".$x;
echo "<br>";
echo "Y : ".$y;

echo "<h5>Example-3:-</h5>";

$x = $y = 20;

++$x;
$x++;
$y++;
--$x;
$y++;
--$x;
++$y;
$y++;
$x++;
$y--;
$x++;
++$x;
--$y;

echo "X : ".$x;
echo "<br>";
echo "Y : ".$y;



echo "<h5>Example-4 --></h5>";

$x = 15;
++$x;
$x++;
--$x;
$x++;
$x--;
--$x;
++$x;
$x++;
$x++;
--$x;
++$x;
++$x;

echo "X = ".$x;
echo "<br>";

echo "<h5>Example-5 --></h5>";

$y = 10;

++$y;
--$y;
$y++;
++$y;
$y--;
$y++;
++$y;
$y--;
$y++;
--$y;
++$y;
$y--;
$y++;

echo "Y : ".$y;


echo "<h5>Example-6 --></h5>";

$x = $y = 24;

++$y;
$y--;
$x++;
++$y;
--$x;
$y++;
$x++;
++$y;
--$x;
$y--;
$x++;
++$y;
--$y;

echo "X = ".$x;
echo "<br>";
echo "Y = ".$y;

echo "<h5>Example-7:-</h5>";

$x = 13;
$y = 15;

++$y;
--$x;
$y--;
$x++;
++$x;
--$y;
++$y;
$x++;
$y--;
++$x;
++$y;
$x--;
$y++;

echo "X = ".$x;
echo "<br>";
echo "Y = ".$y;






?>