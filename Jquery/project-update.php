<?php
include_once('config-pro.php');

$data = $_POST;


// echo "<pre>";
// print_r($data);
$id = $data['id'];

$fname = $data['fname'];
$lname = $data['lname'];
$gender = $data['gender'];
$email = $data['email'];
$dob = $data['dob'];
$address = $data['address'];

if ($fname && $dob && $email && $gender) {
    
    $updQuery = "UPDATE `projects` SET fname= '$fname', lname='$lname', gender='$gender', email='$email', dob='$dob', address='$address' WHERE id=$id";

    // echo $updQuery;
    $con->query($updQuery);

    $_SESSION['success'] = "Data updated successfully....";
   
} else {
    
}
header("location: project-list.php");




?>