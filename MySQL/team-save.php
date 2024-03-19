<?php
include_once('configshop.php');

$data = $_POST;
$name = $data['name'];
$email = $data['email'];
$phone = $data['phone'];

if($name && $email) {
    $insQuery = "INSERT INTO teams(name, email, phone) VALUES('$name', '$email', '$phone')";
    $con->query($insQuery);
    $_SESSION['success'] = "Record Created...";
} else {
    $_SESSION['error'] = "Something wrong...";
}
header("location: team.php");

?>