<?php

require_once('config.php');
$data = $_POST;
echo "<pre>";
print_r($data);

if($_SERVER['REQUEST_METHOD'] == "POST"){
     if($data['name']!=null)  { 
       $name = $data['name'];
       $status = $data['status'];
      
    $stuinsert = "INSERT INTO countries(name,status) VALUES('$name',
    $status)";

       $insertdata = $con->query($stuinsert);
     }
       $countryid  = $con->insert_id;

     if($data['state_name']!=[null]){  
       for($i = 0; $i < sizeof($data['state_name']); $i++){

        $statename = $data['state_name'][$i];
        $status1   = $data['state_status'][$i];
       
       $stainsert = "INSERT INTO states(country_id,name,status) VALUES($countryid,'$statename',$status1)";

       $insdata  = $con->query($stainsert);
       };
    }
    
    
    header("location: country-list.php");

         



}
else{
    echo "error..";
}


?>