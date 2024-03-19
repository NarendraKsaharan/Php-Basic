<?php
include_once('configshop.php');

$data = $_POST;

$name = $data['name'];
$email = $data['email'];
$phone = $data['phone'];
$address = $data['address'];
$post_code = $data['post_code'];
$country = $data['country'];
$card_type = $data['card_type'];
$card_number = $data['card_number'];
$security_code = $data['security_code'];
$name_on_card = $data['name_on_card'];

try {
    if ($name && $email && $country && $card_type) {
    
        $inQuery1 = "INSERT INTO `details`(`name`, `email`, `phone`) VALUES ('$name', '$email', '$phone')";
        $con->query($inQuery1);

        $detailId = $con->insert_id;
    
        $inQuery2 = "INSERT INTO `delivery_addresses`(`detail_id`, `address`, `post_code`, `country`) VALUES ($detailId, '$address', '$post_code', '$country')";
        $con->query($inQuery2);
    
        $inQuery3 = "INSERT INTO `card_details`(`detail_id`, `card_type`, `card_number`, `security_code`, `name_on_card`) VALUES ($detailId, '$card_type', '$card_number', $security_code, '$name_on_card')";
        $con->query($inQuery3);
    
        $_SESSION['success'] = "Details Submitted Successfully......";
    } else {
        $_SESSION['error'] = "ERR_92 Found.....";
    }
    header("location: shop.php");

} catch (Exception $e) {
    echo $e->getMessage();
    die();
}




?>