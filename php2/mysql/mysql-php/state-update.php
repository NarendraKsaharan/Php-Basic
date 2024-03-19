<?php
include_once("config[1].php");

$id = $_POST["id"]??0;
$name = $_POST["name"]??0;
$country = $_POST["country_id"]??0;
$status = $_POST["status"]??0;
$cityname = $_POST["city_name"]??0;
$citystatus = $_POST["city_status"]??0;
$cityid = ($_POST["city_id"]??[0]);

  if($id && $country && $name && $status){

     $query = "UPDATE `state` SET `country_id`='$country',`name`='$name',`status`='$status' WHERE id='$id'";
     $con->query($query);

     $city = implode(",",$cityid);

     $deletequery ="DELETE FROM city where id not in($city) and state_id=$id";
  
     $con->query($deletequery);

    if($cityname){

         for($i=0; $i < count($cityname);$i++){
             $city = $cityname[$i];
             $status = $citystatus[$i];
             $ciid = $cityid[$i];
     
             if($ciid){
                 $updatequery = "UPDATE `city` set name='$city',status='$status'WHERE id='$ciid'";
                 $con->query($updatequery);
             }else{
                 $insertquert = "INSERT INTO `city`( `country_id`, `state_id`, `name`, `status`) VALUES ('$country','$id','$city','$status')";
     
                 $con->query($insertquert);
             }
         }
    }
    $_SESSION['success'] = "Record Update Successfully....";
    header("location: state-list.php");

}else {

    $_SESSION['error'] = "Something Went Wrong......";
      header("location: state-list.php");

}

?>