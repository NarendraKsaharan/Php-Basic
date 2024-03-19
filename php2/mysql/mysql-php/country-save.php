<?php

include_once("config[1].php");

// echo "<pre>";
// print_r($_POST);

$name = $_POST["name"]??0;
$status = $_POST["status"]??0;
$statesname = $_POST["state_name"]??0;
$statestatus = $_POST["state_status"]??0;

if($name && $status){
$insertquery = "insert into country (name, status) values ('$name', '$status')";
$con->query($insertquery);

$countryid = $con->insert_id;

    
for($i=0; $i<count($statesname); $i++){

         $state = $statesname[$i];
         $status = $statestatus[$i];

         if($state && $status){
       
     $iquery = "insert into state (country_id,name,status) values ('$countryid', '$state', '$status')";
     $con->query($iquery);
};

};

    $_SESSION["success"] = "Country Added Successfully....";
    header("location: country-list.php");

}else {

      $_SESSION["error"] = "Something Went Wrong....";
      header("location: country-add.php");


}








?>