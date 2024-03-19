<?php

include_once("config[1].php");

$id = $_GET["id"]??0;

if($id){
    $query = "DELETE FROM `country` WHERE id='$id'";
    $statequery = "DELETE FROM `state` WHERE country_id='$id'";
    $cityquery = "DELETE FROM `city` WHERE country_id='$id'";

    $con->query($query);
    $con->query($statequery);
    $con->query($cityquery);
    
        $_SESSION['success'] = "country id delete......";
        header("location: country-list.php");
        exit();

    
}
$_SESSION['error'] = "something went wrong....";
header("location: country-list.php");
?>