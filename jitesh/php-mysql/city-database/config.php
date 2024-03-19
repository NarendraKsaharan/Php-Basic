<?php

$host = "localhost";
$username = "root";
$password = "";
$databasename = "world";

$con = mysqli_connect($host,$username,$password,$databasename);

if(!$con){
    die("error..........");
}


?>