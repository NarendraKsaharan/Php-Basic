<?php
include_once("config.php");

$id = $_POST["id"]??0;
$name = $_POST["name"]??0;
$email = $_POST["email"]??0;
$phone = $_POST["phone"]??0;
$gender = $_POST["gender"]??0;
$class = isset($_POST["class"])? implode(" / " , $_POST["class"]??0):"";
$fees = $_POST["fees"]??0;

$updatequery = "update students set name='$name', email='$email', phone='$phone', gender='$gender', class='$class',fees='$fees' where id=$id";

if($con->query($updatequery)){

    $_SESSION['success'] = "Record Update Successfully....";
    header("location: student-list.php");

}else {

    $_SESSION['error'] = "Something Went Wrong......";
      header("location: student-list.php");

}





?>