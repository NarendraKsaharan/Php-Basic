<?php

include_once("config.php");

$id = $_GET["id"]??0;

if($id){
    $deletequery = "delete from students where id=$id";
    if($con->query($deletequery)){
        $_SESSION['success'] = "student id delete......";
        header("location: student-list.php");
        exit();

    }
}
$_SESSION['error'] = "something went wrong....";
header("location: student-list.php");

?>