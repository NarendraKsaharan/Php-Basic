<?php
include_once("config[1].php");

$id = $_POST["id"]??0;
$country = $_POST["country_id"]??0;
$state = $_POST["state_id"]??0;
$name = $_POST["name"]??0;
$status = $_POST["status"]??0;


$query = "UPDATE `city` SET `country_id`='$country',`state_id`='$state',`name`='$name',`status`='$status' WHERE `id`='$id'";

if($con->query($query)){

    $_SESSION['success'] = "Record Update Successfully....";
    header("location: city-list.php");

}else {

    $_SESSION['error'] = "Something Went Wrong......";
      header("location: city-list.php");

}
?>