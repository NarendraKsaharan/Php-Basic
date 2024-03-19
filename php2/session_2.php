<?php
session_start();

echo $_SESSION["class"];

echo"<br>";
echo $_SESSION["name"];

$_SESSION["age"] = 21;

$_SESSION["fee"] = 500;

echo"<br>";
echo $_SESSION["age"];

echo"<br>";
echo $_SESSION["fee"];


unset($_SESSION["class"]);



?>