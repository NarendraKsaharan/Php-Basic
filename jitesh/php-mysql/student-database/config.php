<?php
$host = "localhost";
$username = "root";
$password = "";
$databaseName = "school";

$con = mysqli_connect($host, $username, $password, $databaseName);

if(!$con) {
    die("Unable to connect Database...");
}
?>