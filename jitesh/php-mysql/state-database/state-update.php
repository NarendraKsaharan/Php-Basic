<?php
require_once("config.php");

$data = $_POST;
echo"<pre>";
print_r($data);


if($_SERVER['REQUEST_METHOD'] == "POST"){

      $id  =  $data['id'];
      $name = $data['name'];
      $status = $data['status'];
      $countryid = $data['country_id'];

      $updquery = "UPDATE states SET name='$name' ,status=$status,country_id=$countryid  WHERE id=$id";

      $con->query($updquery);
      $citid = implode(",",$data['city_id']??[]);
     
      if($citid){
        $deletecity = "DELETE FROM cities where id NOT IN($citid) and state_id = $id";
          $con->query($deletecity);
      }

          if($data['city_name']??0){    
                  for($i = 0; $i< count($data['city_name']); $i++){

                       $cityname = $data['city_name'][$i];
                    $citystatus  = $data['city_status'][$i];
                 $cityid   = $data['city_id'][$i]??0;

    if($cityid){
            $incity = "UPDATE cities SET name ='$cityname', state_id = $id, status = $citystatus ,
                country_id = $countryid where id=$cityid";
                     $con->query($incity);
       }else{
            $insertcity = "INSERT INTO cities(country_id, state_id, name, status) value($countryid, 
                 $id, '$cityname', $citystatus)";
                     $con->query($insertcity);
      };
     };

      }
      header("location: state-list.php");


}

?>