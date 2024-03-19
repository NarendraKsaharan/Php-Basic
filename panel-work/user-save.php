<?php
include_once('config-user.php');

$data = $_POST;

// echo "<pre>";
// print_r($data);
// die;

$name = $data['name'];
$email = $data['email'];
$password = $data['password'];
$cpassword = $data['cpassword'];

if($cpassword == $password){
    

    $selQuery = "SELECT email FROM `users` WHERE email='$email'";

    $selEmail = $con->query($selQuery);

    if ($selEmail->num_rows) {
        
        $_SESSION['error'] = "Email already exits";
        
        header("location: registration.php");
    } else {
        if ($name && $email && $password) {
            $password=md5($password);

            $inQuery = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
            $con->query($inQuery);
            $_SESSION['success'] = "Account Create Succcesfully ...";

            header("location: index.php");    
        } else {
            $_SESSION['error'] = "Error can't creat account";
            header('loaction: registration.php');
        }
    }
    
} else{
    header("location: registration.php");
    $_SESSION['error'] = "Password dosn't match.";
} 


    
    // $valQuery = "SELECT * FROM `users` WHERE email='$email' LIMIT 1";
    // $emailCheck = $con->query($valQuery);
    // $user = $emailCheck->num_rows;

    // if ($user) {
    //     if ($user['email'] === $email) {
    //         $_SESSION['error'] = "Email already Exits....";
    //     }
    // } else {
    //     $inQuery = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
    //     $con->query($inQuery);
    //     $_SESSION['success'] = "Account Create Succcesfully ...";
    // }
//header("location: user-list.php");

?>