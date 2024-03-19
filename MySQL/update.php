<?php
include_once('configfor.php');

try {
        $delQuery = "DELETE FROM `forms`WHERE id= 2";
    
    $con->query($delQuery);

    $_SESSION['success'] = "";
    
    header("location: form-list.php");
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}


?>