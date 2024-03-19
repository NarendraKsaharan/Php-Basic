<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'school_management';

try {
    $con = mysqli_connect($host, $username, $password, $dbName);
} catch(Exception $e) {
    echo $e->getMessage();
}

?>