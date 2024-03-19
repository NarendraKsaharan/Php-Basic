<?php
include_once('configprod.php');

$data = $_POST;

$name = $data['name'];
$sku = $data['sku'];
$mfg = $data['mfg'];
$price = $data['price'];


try {
    if ($name) {
    
        $inQuery = "INSERT INTO `products` (`name`, `sku`, `mfg`, `price`) VALUES
        ('$name', $sku, '$mfg', $price)";
    
        $con->query($inQuery);
    
        $_SESSION['success'] = "Record add successfully...";
    } else {
    
        $_SESSION['error'] = "error_code 505.....";
    }
    
    header("location: product-list.php");
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}




?>