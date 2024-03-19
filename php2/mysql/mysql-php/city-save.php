<?php
include_once("config[1].php");

$country= $_POST["country_id"];
$state= $_POST["state_id"];
$name = $_POST["name"];
$status = $_POST["status"];

$state = "INSERT INTO `city`(`country_id`,`state_id`,`name`, `status`) VALUES ('$country','$state','$name','$status')";

if($con->query($state)){
    $_SESSION['success'] =  "city success......";
     header("location: city-list.php");
}else{
    $_SESSION['error'] = "something went wrong......";
    header("location: city-add.php");
}

?>