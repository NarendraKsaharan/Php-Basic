<?php
session_start();

$_SESSION["class"] = "PHP Class";



$_SESSION["name"] = "student";

echo $_SESSION["class"];
echo"<br>";

echo $_SESSION["name"]



?>