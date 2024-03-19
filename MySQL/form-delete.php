<?php
include_once('configfor.php');

try {
        $delQuery = "DELETE FROM `forms`WHERE id";
    
    $con->query($delQuery);

    $_SESSION['success'] = "इया मांडा एडिट होव कोनी पेला इंग उपर रामाण करो";
    
    header("location: form-list.php");
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}


?>