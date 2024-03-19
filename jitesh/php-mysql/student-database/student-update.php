<?php
require_once('config.php');

$data = $_POST;
print_r($data);

if($_SERVER['REQUEST_METHOD'] == "POST"){

       $id = $data['id'];
       $name = $data['name'];
       $roll_number = $data['roll_number'];
       $email = $data['email'];
       $phone = $data['phone'];
       $gender = $data['gender'];
       $fee  =  $data['fee'];
       $address  = $data['address'];

       $updquery  = "UPDATE students SET name='$name', roll_number=$roll_number, email='$email', phone='$phone', 
       gender='$gender', fee=$fee, address='$address' WHERE id=$id";

       $con->query($updquery);
       
        header("location: student-list.php");

}




?>