<?php
require_once("config.php");

$data = $_POST;
echo "<pre>";
print_r($data);


if($_SERVER['REQUEST_METHOD'] == "POST"){

      $id  =  $data['id'];
      $name = $data['name'];
      $status = $data['status'];

      $updquery = "UPDATE countries SET name='$name',status=$status  WHERE id=$id";

      $con->query($updquery);

      $staid = implode(",",$data['state_id']??[]);
     if($staid){
            $deletest = "DELETE FROM states where id NOT IN($staid) and country_id=$id";
                $con->query($deletest);
     }
     
if($data['state_name']){
      for($i = 0; $i < sizeof($data['state_name']); $i++){

            $statename = $data['state_name'][$i];
            $status1   = $data['state_status'][$i];
            $stateid  =  $data['state_id'][$i]??0;
     if($stateid){
            $stainsert = "UPDATE states SET name='$statename',status=$status1 WHERE id=$stateid";

            $con->query($stainsert);

            

        }else{
                $stateinsert ="INSERT INTO states(name,country_id,status) VALUES('$statename',$id,
                   $status1)";
                      $con->query($stateinsert);
           }
           
           }
      } 
         

      header("location: country-list.php");


}

?>