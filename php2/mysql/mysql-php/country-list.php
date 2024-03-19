<?php
include_once("config[1].php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>country-list</title>
    <style>
        .success{
            background-color:green;
            padding: 10px;
        }
        .error{
            background-color:red;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
       $query = "select * from country order by id desc";
       $country = $con->query($query);
    ?>
    <h1>country-list</h1>
    <?php
      if(isset($_SESSION["success"])){
        ?>
        <div class="success"><?=$_SESSION["success"] ?></div>
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
    <a href="country-add.php">++Add country</a>
    <table border="1" callspacing="0" width="500">
        <thead>
            <tr>
                <th>sr.no</th>
                <th>name</th>
                <th>status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
             if($country->num_rows){
                $i=1;
                while($_country = mysqli_fetch_assoc($country)){
                     ?>
                     <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $_country["name"] ?></td>
                        <td><?= $_country["status"] ?></td>
                        <td><a href="country-edit.php?id=<?=$_country["id"] ?>">Edit</a>|<a href="country-delete.php?id=<?=$_country["id"] ?>">Delete</a></td>
                     </tr>
                     <?php
                }
             }else{
                ?>
                <tr>
                <td colspan="4" align="center">NO record...</td>
                </tr>
                <?php
             }
            ?>
        </tbody>

    </table>
</body>
</html>