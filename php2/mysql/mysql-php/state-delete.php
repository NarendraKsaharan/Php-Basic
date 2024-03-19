<?php

include_once("config[1].php");

$id = $_GET["id"]??0;

if($id){
    $query = "DELETE FROM `state` WHERE id='$id'";
    if($con->query($query)){
        $_SESSION['success'] = "state  id delete......";
        header("location: state-list.php");
        exit();

    }
}
$_SESSION['error'] = "something went wrong....";
header("location: state-list.php");
?>