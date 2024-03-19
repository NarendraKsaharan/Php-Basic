<?php
include_once("config[1].php");

$id = $_POST["id"]??0;
$name = $_POST["name"]??0;
$status = $_POST["status"]??0;
$statename = $_POST["state_name"]??0;
$statestatus = $_POST["state_status"]??0;
$stateid = ($_POST["state_id"]??[0]);
//$stateid = implode(" , ",$_POST["state_id"]??0);

if($id && $name && $status){
    $upquery = "UPDATE `country` SET `name`='$name',`status`='$status' WHERE id='$id'";
    $con->query($upquery);
    $countryid = $con->insert_id;

     $state = implode(",",$stateid);

    $deletequery ="DELETE FROM state where id not in($state) and country_id=$id";
 
    $con->query($deletequery);
   

     if($statename){
      
         for($i = 0; $i < count($statename); $i++){
               $state = $statename[$i];
               $status = $statestatus[$i];
               $cid = $stateid[$i];
               if($cid){
                  $update = "UPDATE state SET name='$state',status='$status' WHERE id='$cid'";
                  $con->query($update);
               }else{
                   $insertquery = "INSERT into state (country_id,name,status)values('$id','$state','$status')";
                   $con->query($insertquery);
               } 
          }
    };      
             $_SESSION['success'] = "Record Update Successfully....";
             header("location: country-list.php");

}else {

    $_SESSION['error'] = "Something Went Wrong......";
      header("location: country-list.php");

}





?>
