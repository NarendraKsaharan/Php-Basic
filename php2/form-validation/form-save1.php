<?php

session_start();

$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];


if($name && $email && $age && $password && $phone && $gender){
 $data =$_REQUEST;
$_FILES =$_FILES;
echo"<pre>";
print_r($data);
print_r($_FILES);    
}else{

    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    $_SESSION['password'] = $password;
    $_SESSION['age'] = $age;
    $_SESSION['gender'] = $gender;
    

    if(!$name) {
        $_SESSION['name_error'] = "Name is required...";
    }
    if(!$email) {
        $_SESSION['email_error'] = "Email is required...";
    }
    if(!$phone){
        $_SESSION['phone_error'] = "Phone is required...";
    }
    if(!$password){
        $_SESSION['password_error'] = "password is required...";
    }
    if(!$age){
        $_SESSION['age_error'] = "age is required...";
    }
    if(!$gender){
        $_SESSION['gender_error'] = "gender is required...";
    }

    $_SESSION['error'] = "All fields are required...";

    header("location: form-validation1.php");

}


    ?>