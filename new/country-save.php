<?php
include_once('config.php');

$data = $_POST;

// echo "<pre>";
// print_r($data);

$name = $data['name'];
$status = $data['status'];

if ($name && $status) {
    
    $inQuery = "INSERT INTO `countries`(`name`, `status`) VALUES ('$name', '$status')";
    $con->query($inQuery);

    $_SESSION['success'] = "Country Added successfully";
} else {
    $_SESSION['error'] = "Somthing Went Wrong";
}
header("location: country-list.php");


?>