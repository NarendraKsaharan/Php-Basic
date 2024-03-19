<?php
include_once('config-pro.php');
$id = $_GET['pid'];

//echo $_GET['pid'];

if ($id) {
    $delQuery = "DELETE FROM `projects` WHERE id=$id";

//echo $delQuery;

    $con->query($delQuery);

    $_SESSION['success'] = "Data Delete succcessfully....";

    header("location: project-list.php");
} else{
    header("location: project-list.php");
}




?>