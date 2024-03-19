<?php

require_once('config.php');
$data = $_POST;
echo "<pre>";
print_r($data);


if($_SERVER['REQUEST_METHOD'] == "POST"){
        
       $name = $data['name'];
       $status = $data['status'];
       $country_id = $data['country_id'];
      
    $stuinsert = "INSERT INTO states(name,country_id,status) VALUES('$name',$country_id,
      $status)";

       $insertdata = $con->query($stuinsert);
           $stateid = $con->insert_id;
           
      if($data['city_name']){
           for($i = 0; $i<count($data['city_name']); $i++){

                   $cityname =  $data['city_name'][$i];
                  $citystatus = $data['city_status'][$i];
                $cityinsert = "INSERT INTO cities(country_id,state_id,name,status) value($country_id,$stateid,
              '$cityname',$citystatus)";

                  $con->query($cityinsert);
      };
    }
                    header("location: state-list.php");

}
else{
    echo "error..";
}


?>