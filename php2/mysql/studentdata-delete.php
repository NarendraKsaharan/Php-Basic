<?php

include_once("config.php");

$id = $_GET["id"]??0;

if($id){
    $deletequery = "delete from studentdata where id=$id";
    if($con->query($deletequery)){
        $_SESSION['success'] = "studentdata id delete......";
        header("location: studentdata-list.php");
        exit();

    }
}
$_SESSION['error'] = "something went wrong....";
header("location: studentdata-list.php");

?>