<?php

include_once("config.php");
 
//session_start();


//$fdate=$_POST;
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$gender = $_POST["gender"]??0;
$class = isset($_POST["class"])? implode(" / ", $_POST["class"]):"";
$fees = $_POST["fees"];

if($name && $email && $phone && $gender && $class && $fees){
   
    $date = $_POST;
    echo "<pre>";
    print_r($date);
    
}else{
        $_SESSION['name']=$name;
        $_SESSION['email']=$email;
        $_SESSION['phone']=$phone;
        $_SESSION['gender']=$gender;
        $_SESSION['class']=$class;
        $_SESSION['fees']=$fees;
        if(!$name){
            $_SESSION['name_error']="name is required";
        }
        if(!$email){
            $_SESSION['email_error']="email is required";
        }
        if(!$phone){
            $_SESSION['phone_error']="phone is required";
        }
        if(!$gender){
            $_SESSION['gender_error']="gender is required";
        }
        if(!$class){
            $_SESSION['class_error']="class is required";
        }
        if(!$fees){
            $_SESSION['fees_error']="fees is required";
        }
        $_SESSION['error']="All fields are required.. ";
        header("location: student-add.php");
        exit();
    }


    $stuquery="insert into students(name,email,phone,gender,class, fees)values('$name','$email','$phone','$gender','$class','$fees')";

if($con->query($stuquery)){
    $_SESSION['success'] =  "student success......";
     header("location: student-list.php");
}else{
    $_SESSION['error'] = "something went wrong......";
    header("location: student-add.php");
}


 

?>