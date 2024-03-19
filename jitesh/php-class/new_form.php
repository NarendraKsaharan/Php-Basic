<?php

session_start();

if($_SERVER['REQUEST_METHOD']== "POST"){
    $data = $_POST;
    $iserror = false;

    if(empty($data['name'])){
        $_SESSION['nameerror'] = "name is required...";
        $iserror = true;
    }else{
        $_SESSION['nameval'] = $data['name'];
    }

    if(empty($data['father-name'])){
      $_SESSION['father-nameerror'] = "father's name is required ...";
      $iserror = true;
    }else{
        $_SESSION['father-nameval'] = $data['father-name'];
    }

    if(empty($data['roll-number'])){
        $_SESSION['roll-numbererror'] = "roll number is required ...";
        $iserror = true;
    }else{
        $_SESSION['roll-numberval'] = $data['roll-number'];
    }

    if(empty($data['email'])){
        $_SESSION['emailerror'] = "email is required ...";
        $iserror = true;
    }else{
        $_SESSION['emailval'] = $data['email'];
    }

    if(empty($data['password'])){
        $_SESSION['passworderror'] = "password is required ...";
        $iserror = true;
    }else{
        $_SESSION['passwordval'] = $data['password'];
    }

    if(empty($data['phone'])){
        $_SESSION['phoneerror'] = "phone number is required ...";
        $iserror = true;
    }else{
        $_SESSION['phoneval'] = $data['phone'];
    }

    if($iserror) {
        header("location: form_2.php");
    } else {
        echo "All Set!! Form Submited";
    }
    

}else {
    header("location: form_2.php");
}




?>