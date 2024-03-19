<?php

require_once('config.php');

$data = $_GET;

if(isset($data['id'])){
   $id = $data['id'];
   $delquery = "DELETE FROM `states` where id=$id";

   $con->query($delquery);

   $delcity = "DELETE FROM cities where state_id = $id";
     $con->query($delcity);

   header("location: state-list.php");


}else{
    echo "error...";
}



?>