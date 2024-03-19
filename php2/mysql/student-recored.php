<?php

include_once("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student recored</title>
</head>
<body>
    <?php
    //  include_once("config.php");
    //  include("config.php");
    //  include("config.php");
     
    //  require("config.php");
    //  require_once("config.php")

    $selQuery = "SELECT * FROM recoreds ";
    $studentData = $con->query($selQuery);
 

    // echo "<pre>";
    // print_r($studentData)
    
    ?>
      <h1>Student recored</h1>
      <table border="1" cellspacing="0" width="800">
        <thead>
            <tr>
                <th>Sr.NO.</th>
                <th>name</th>
                <th>address</th>
                <th>class</th>
                <th>phone</th>
                <th>gender</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
              if($studentData->num_rows){
                $i = 1;
                 while($_recoreds = mysqli_fetch_assoc($studentData)){
                    // echo "<pre>";
                    // print_r($_recoreds);
                    ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?php echo $_recoreds["name"];?></td>
                        <td><?= $_recoreds["address"] ?></td>
                        <td><?= $_recoreds["class"] ?></td>
                        <td><?= $_recoreds["phone"] ?></td>
                        <td><?= $_recoreds["gender"] ?></td>
                        <td><a href="">Edit</a>|<a href="">Delete</a></td>
                    </tr>
                    <?php
                 }
            }else{
                ?>
                <tr>
                    <td colspan="7" align="center">NO record...</td>
                </tr>
                <?php
            }
            ?>
        </tbody>

      </table>
    
</body>
</html>



