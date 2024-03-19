<?php
include_once('config-user.php');
include_once('auth.php');

$data = $_POST;

// echo "<pre>";
// print_r($data);
// die;

$id = $data['id'];
$name = $data['name'];
$email = $data['email'];
$password = $data['password'];
$password = $data['password'];



if ($name && $email && $password) {
    
    $updQuery = "UPDATE `users` SET name='$name', email='$email', password='$password' WHERE id=$id";

    // echo $updQuery;
    $con->query($updQuery);

    $_SESSION['success'] = "User Detail update successfully..";

    header("location: user-list.php");
} else {
    header("location: user-list.php");
}

?>