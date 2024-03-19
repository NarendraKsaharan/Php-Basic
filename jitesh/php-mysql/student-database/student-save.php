<?php

require_once('config.php');
$data = $_POST;
echo "<pre>";
print_r($data);

if($_SERVER['REQUEST_METHOD'] == "POST"){
        
       $name = $data['name'];
       $roll_number = $data['roll_number'];
       $email = $data['email'];
       $phone = $data['phone'];
       $gender = $data['gender'];
       $fee  =   $data['fee'];
       $address = $data['address'];

    $stuinsert = "INSERT INTO students(name,roll_number,email,phone,gender,fee,address) VALUES('$name',
    $roll_number,'$email','$phone','$gender',$fee,'$address')";

       $insertdata = $con->query($stuinsert);

       if($insertdata){
        $_SESSION['success'] = "record created successfully...";
       }else{
        $_SESSION['error'] = "something went wrong ....";
       }
    
    header("location: student-list.php");

         



}
else{
    echo "error..";
}


?>