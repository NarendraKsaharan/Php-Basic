<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$dbName = "company_managment";

try {
    $con = mysqli_connect($host, $username, $password, $dbName);
} catch (Exception $e) {
    echo $e->getMessage();
}



?>