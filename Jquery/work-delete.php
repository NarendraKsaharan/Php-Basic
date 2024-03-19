<?php
include_once('config-work.php');

$id = $_GET['wid']??0;

//echo $id;
if ($id) {
    $delQuery = "DELETE FROM `works` WHERE id = $id";

    //echo $delQuery;

    $con->query($delQuery);

    $_SESSION['deleted'] = "Data Delete sucessfully..";

    header("location: work-list.php");
} else {
    header("location: work-list.php");
}



?>