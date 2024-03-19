<?php
include_once('configfor.php');

$data = $_POST;

$fname = $data['fname'];
$lname = $data['lname'];
$nname = $data['nname'];
$email = $data['email'];
$password = $data['password'];
$dob = $data['dob'];
$gender = $data['gender'];
$mobile = $data['mobile'];
$address = $data['address'];

try {
    if ($fname && $email) {
        $insQuery = "INSERT INTO `forms`(`fname`, `lname`, `nname`, `email`, `password`,`dob`,
                 `gender`, `mobile`, `address`) VALUES ('$fname', '$lname', '$nname', '$email', 
                 '$password', '$dob', '$gender', '$mobile', '$address')";
        $con->query($insQuery);
        $_SESSION['success'] = "Information Add Successfully....";
    } else {
        $_SESSION['error'] = "ERR_Record Not Found....";
    
    }
    header("location: form-list.php");
    header("location: mark-list.php");
    
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}
?>