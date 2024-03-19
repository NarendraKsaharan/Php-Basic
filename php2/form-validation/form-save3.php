<?php

session_start();

// $date=$_REQUEST;
// echo"<pre>";
// print_r($date);

$name=$_POST["name"];
$email=$_POST["email"];
$specifictime=$_POST["specifictime"];
$classdetails=$_POST["classdetails"];
 $gender=$_POST["gender"];

if($name && $email && $specifictime && $specifictime && $gender ){

    $date=$_REQUEST;
    echo "<pre>";
    print_r($date);   
}else{
    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    $_SESSION['specifictime']=$specifictime;
    $_SESSION['classdetails']=$classdetails;
    $_SESSION['gender']=$gender;
    if(!$name){
        $_SESSION['name_error']="name is required";
    }
    if(!$email){
        $_SESSION['email_error']="email is required";
    }
    if(!$specifictime){
        $_SESSION['specifictime_error']="specifictime is required";
    }
    if(!$classdetails){
        $_SESSION['classdetails_error']="classdetails is required";
    }
    if(!$gender){
        $_SESSION['gender_error']="gender is required";
    }
    $_SESSION['error']="All fields are required.. ";
    header("location: form-validation3.php");
}



?>