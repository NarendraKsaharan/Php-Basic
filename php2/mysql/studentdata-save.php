<?php

include_once("config.php");



$firstname = $_POST["firstname"]??0;
$lastname = $_POST["lastname"]??0;
$emailid = $_POST["emailid"]??0;
$mobilenumber = $_POST["mobilenumber"]??0;
$gender = $_POST["gender"]??0;
$dateofbirth = $_POST["dateofbirth"]??0;
$address = $_POST["address"]??0;
$city = $_POST["city"]??0;
$pincode = $_POST["pincode"]??0;
$state = $_POST["state"]??0;
$country = $_POST["country"]??0;
$hobbies = isset($_POST["hobbies"])? implode(" | ", $_POST["hobbies"]??0):"";
$qualification = isset($_POST["qualification"])? implode(" | ", $_POST["qualification"]??0):"";
$coursesappliedfor = $_POST["coursesappliedfor"]??0;


if($firstname && $lastname && $emailid && $mobilenumber && $gender && $dateofbirth && $address && $city && $pincode && $state && $country && $hobbies && $qualification && $coursesappliedfor ){

}else{
    $_SESSION["firstname"] = $firstname;
    $_SESSION["lastname"] = $lastname;
    $_SESSION["emailid"] = $emailid;
    $_SESSION["mobilenumber"] = $mobilenumber;
    $_SESSION["gender"] = $gender;
    $_SESSION["dateofbirth"] = $dateofbirth;
    $_SESSION["address"] = $address;
    $_SESSION["city"] = $city;
    $_SESSION["pincode"] = $pincode;
    $_SESSION["state"] = $state;
    $_SESSION["country"] = $country;
    $_SESSION["hobbies"] = $hobbies;
    $_SESSION["qualification"] = $qualification;
    $_SESSION["coursesappliedfor"] = $coursesappliedfor;

    if(!$firstname){
        $_SESSION['firstname_error']="first name is required";
    }
    if(!$lastname){
        $_SESSION['lastname_error']="last name is required";
    }
    if(!$emailid){
        $_SESSION['emailid_error']="email id is required";
    }
    if(!$mobilenumber){
        $_SESSION['mobilenumber_error']="mobile number is required";
    }
    if(!$gender){
        $_SESSION['gender_error']="gender  is required";
    }
    if(!$dateofbirth){
        $_SESSION['dateofbirth_error']="date of birth id is required";
    }
    if(!$address){
        $_SESSION['address_error']="address id is required";
    }
    if(!$city){
        $_SESSION['city_error']="city  is required";
    }
    if(!$pincode){
        $_SESSION['pincode_error']="pin code  is required";
    }
    if(!$state){
        $_SESSION['state_error']="state  is required";
    }
    if(!$country){
        $_SESSION['country_error']="country is required";
    }
    if(!$hobbies){
        $_SESSION['hobbies_error']="hobbies is required";
    }
    if(!$qualification){
        $_SESSION['qualification_error']="qualification is required";
    }
    if(!$coursesappliedfor){
        $_SESSION['coursesappliedfor_error']="courses applied for is required";
    }
    $_SESSION['error']="All fields are required.. ";
    header("location: studentdata-add.php");
    exit();
}


$stuquery="INSERT INTO `studentdata`( `firstname`, `lastname`, `emailid`, `mobilenumber`, `gender`, `dateofbirth`, `address`, `city`, `pincode`, `state`, `country`, `hobbies`, `qualification`, `coursesappliedfor`) VALUES ('$firstname','$lastname','$emailid','$mobilenumber','$gender','$dateofbirth','$address','$city','$pincode','$state','$country','$hobbies','$qualification','$coursesappliedfor')";
// echo "<pre>";
// print_r($stuquery);
// die;

if($con->query($stuquery)){
    $_SESSION['success'] =  "student success......";
     header("location: studentdata-list.php");
}else{
    $_SESSION['error'] = "something went wrong......";
    header("location: studentdata-add.php");
}