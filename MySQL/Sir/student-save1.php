<?php
include_once('mysql-1-php.php');
$data = $_POST;
// echo "<pre>";
// print_r($data);

$name = $data['name'];
$email = $data['email'];
$phone = $data['phone'];
$age = $data['age'];
$class = $data['class'];
$pincod = $data['pincod'];

try {

    if($name && $email) {
        $inQuery = "INSERT INTO `students-2`(`name`, `email`, `phone`, `age`, `class`, `pincod`) VALUES('$name', '$email', '$phone', $age, '$class', $pincod)";

        $manish->query($inQuery);
    
        $_SESSION['success'] = "Record created successfully...";
        
    } else {
        $_SESSION['error'] = "Something went wrong...";
    }
    
    header("location: student-list-2.php");

} catch(Exception $e) {
    echo $e->getMessage();
    die();
}



?>