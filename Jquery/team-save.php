<?php
include_once('configteam.php');


$data = $_POST;

    $name = $data['name'];
    $email = $data['email'];
    $phone = $data['phone'];


    $total = count($name);

    for($i=0; $i<$total; $i++) {
        $names = $name[$i];
        $emails = $email[$i];
        $phones = $phone[$i];
     
        
        if ($names && $emails && $phones) {

        $inQuery = "INSERT INTO teams (name, email, phone) VALUES ('$names', '$emails', '$phones')";
        $con->query($inQuery);

        
        } 
}
$_SESSION['success'] = "Data save successfully ......";
header("location: team-list.php");


?>