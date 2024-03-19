<?php

include_once("config[1].php");

// echo "<pre>";
// print_r($_POST);

$countryid = $_POST["country_id"]??0;
$name = $_POST["name"]??0;
$status = $_POST["status"]??0;
$cityname = $_POST["city_name"]??0;
$citystatus = $_POST["city_status"]??0;

if($countryid && $name && $status){
    $insertquery = "insert into state (country_id,name, status) values ('$countryid', '$name', '$status')";
    $con->query($insertquery);

    //  $countryid = $con->insert_id;
    $stateid = $con->insert_id;
    
        
    for($i=0; $i<count($cityname); $i++){
    
             $city = $cityname[$i];
             $status = $citystatus[$i];
    
             if($city && $status){
           
         $iquery = "insert into city (country_id,state_id,name,status) values ('$countryid','$stateid', '$city', '$status')";
         $con->query($iquery);
    };
    
    };

    $_SESSION["success"] = "State Added Successfully....";
    header("location: state-list.php");

}else {

      $_SESSION["error"] = "Something Went Wrong....";
      header("location: state-add.php");


}


?>


