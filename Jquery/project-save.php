<?php
include_once('config-pro.php');

$data = $_POST;

$fname = $data['fname'];
$lname = $data['lname'];
$gender = $data['gender'];
$email = $data['email'];
$dob = $data['dob'];
$address = $data['address'];

if ($fname && $email && $dob) {
    
    $inQuery = "INSERT INTO `projects`(`fname`, `lname`, `gender`, `email`, `dob`, `address`) VALUES ('$fname', '$lname', '$gender', '$email', '$dob', '$address')";
    

    $con->query($inQuery);

    $_SESSION['success'] = "Data Add Successfully....";
} else {
    $_SESSION['error'] = "Somthing Wrong Found....";
}
header("location: project-list.php");

?>
