<?php

require_once('config.php');

$data = $_GET;

if(isset($data['id'])){
   $id = $data['id'];
   $delquery = "DELETE FROM `students` where id=$id";

   $con->query($delquery);

   header("location: student-list.php");


}else{
    echo "error...";
}



?>