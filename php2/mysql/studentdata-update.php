<?php
include_once("config.php");

$id = $_POST["id"]??0;
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
$hobbies = isset($_POST["hobbies"])? implode(" | ", $_POST["hobbies"]):"";
$qualification = isset($_POST["qualification"])? implode(" | ", $_POST["qualification"]):"";
$coursesappliedfor = $_POST["coursesappliedfor"]??0;

$updatequery = "UPDATE `studentdata` SET `firstname`='$firstname',`lastname`='$lastname',`emailid`='$emailid',`mobilenumber`='$mobilenumber',`gender`='$gender',`dateofbirth`='$dateofbirth',`address`='$address',`city`='$city',`pincode`='$pincode]',`state`='$state',`country`='$country',`hobbies`='$hobbies',`qualification`='$qualification',`coursesappliedfor`='$coursesappliedfor' WHERE `id`='$id'";

if($con->query($updatequery)){

    $_SESSION['success'] = "Record Update Successfully....";
    header("location: studentdata-list.php");

}else {

    $_SESSION['error'] = "Something Went Wrong......";
      header("location: studentdata-list.php");

}





?>