<?php

include_once("config[1].php");

$id = $_GET["id"]??0;

if($id){
    $query = "DELETE FROM `city` WHERE id='$id'";
    if($con->query($query)){
        $_SESSION['success'] = "city id delete......";
        header("location: city-list.php");
        exit();

    }
}
$_SESSION['error'] = "something went wrong....";
header("location: city-list.php");
?>