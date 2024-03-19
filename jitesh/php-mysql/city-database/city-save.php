<?php
require_once("config.php");

$data = $_POST;

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $name = $data['name'];
    $country_id = $data['country_id'];
    $state_id = $data['state_id'];
    $status = $data['status'];

    $insert = "INSERT INTO cities(name,country_id,state_id,status) value('$name',$country_id,$state_id,$status)";

    $insertdata = $con->query($insert);

    header("location: city-list.php");


}else{
    echo "error......";
}

?>