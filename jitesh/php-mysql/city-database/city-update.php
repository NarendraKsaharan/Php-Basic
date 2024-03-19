<?php

require_once('config.php');
$data = $_POST;
echo"<pre>";
print_r($data);

if($_SERVER ['REQUEST_METHOD'] == "POST"){

    $id = $data['id'];
    $name = $data['name'];
    $country_id = $data['country_id'];
    $state_id = $data['state_id'];
    $status = $data['status'];

    $insert = "UPDATE `cities` SET name='$name' , country_id= $country_id , state_id= $state_id,
     status=$status where id=$id";

    $con->query($insert);
    header("location: city-list.php");

}else{
    echo"error...";
}


?>