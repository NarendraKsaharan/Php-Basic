<?php

require_once('config.php');


if(isset($_GET['id'])){

   $id = $_GET['id'];

   $delquery = "DELETE FROM `cities` where id=$id";

   $con->query($delquery);

   header("location: city-list.php");


}else{
    echo "error...";
}


?>