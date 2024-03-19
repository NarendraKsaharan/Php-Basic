<?php

require_once('config.php');

$data = $_GET;

if(isset($data['id'])){
   $id = $data['id'];
       $delquery = "DELETE FROM `countries` where id=$id";

         $con->query($delquery);

    $statedel = "DELETE FROM `states` where country_id = $id";
         $con->query($statedel);
     
         $citydel = "DELETE FROM cities where country_id = $id";
            $con->query($citydel);


   header("location: country-list.php");


}else{
    echo "error...";
}



?>