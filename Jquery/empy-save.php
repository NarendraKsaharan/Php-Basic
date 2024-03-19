<?php
include_once('config-empy.php');

$data = $_POST;

$name = $data['name'];
$email = $data['email'];
$password = $data['password'];
$phone = $data['phone'];
$position = $data['position'];

// echo "<pre>";
// print_r($data);

// $array = [$name, $email, $password, $phone, $position];
$count = count($name);

for ($i=0; $i < $count; $i++) { 
    $names = $name[$i];
    $emails = $email[$i];
    $pass = $password[$i];
    $phones = $phone[$i];
    $posi = $position[$i];

    if ($names && $emails && $pass && $phones && $posi) {
        
        $insQuery = "INSERT INTO `employees`(`name`, `email`, `password`, `phone`, `position`) VALUES ('$names', '$emails', '$pass', '$phones', '$posi')";

        $con->query($insQuery);

    }
}

$_SESSION['success'] = "Data Inserted successfully.....";
header("location: empy-list.php");



// echo "<pre>";
// print_r($count);



?>