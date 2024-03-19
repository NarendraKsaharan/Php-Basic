<?php

include_once("config[1].php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>city-list</title>
    <style>
        .success{
            background:green;
            padding: 10px;
        }
        .error{
            background:red;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
      //$query = "SELECT * FROM `city`";
      $query = "select c1.*, c.name as country_id ,s.name as state_id from city as c1 INNER JOIN state as s ON s.id=c1.state_id INNER JOIN country as c on c.id=c1.country_id";
      $city = $con->query($query);
    ?>
    <h1>city list</h1>
    <?php
      if(isset($_SESSION["success"])){
        ?>
        <div class="success"><?= $_SESSION["success"] ?></div>
        <?php
        unset($_SESSION["success"]);
      }
      if(isset($_SESSION["error"])){
        ?>
        <div class="error"><?= $_SESSION["error"] ?></div>
        <?php
        unset($_SESSION["error"]);
      }
    ?>
    <a href="city-add.php">++add city</a>
    <table border="1" callspacing="0" width="800">
        <thead>
            <tr>
                <td>sr.no</td>
                <td>country_id</td>
                <td>state_id</td>
                <td>name</td>
                <td>status</td>
                <td>Action</td>
            </tr>
        </thead>
           <tbody>
           <?php
             if($city->num_rows){
                $i=1;
                while($_city = mysqli_fetch_assoc($city)){
                     ?>
                     <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $_city["country_id"] ?></td>
                        <td><?= $_city["state_id"] ?></td>
                        <td><?= $_city["name"] ?></td>
                        <td><?= $_city["status"] ?></td>
                        <td><a href="city-edit.php?id=<?=$_city["id"] ?>">Edit</a> | <a href="city-delete.php?id=<?=$_city["id"] ?>">Delete</a></td>
                     </tr>
                     <?php
                }
             }else{
                ?>
                <tr>
                <td colspan="6" align="center">NO record...</td>
                </tr>z
                <?php
             }
            ?>
           </tbody>
    </table>
</body>
</html>