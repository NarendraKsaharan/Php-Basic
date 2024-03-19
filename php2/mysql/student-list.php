<?php

include_once("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student-list</title>
    <style>
         .success{
            background-color: #c1b43d;
            padding: 10px;
         }
         .error{
            background-color: red;
            padding: 10px;
         }
    </style>
</head>
<body>
     <?php
     $query ="select * from students order by id DESC";
     $studata=$con->query($query);          
     ?>
    <h1>student-list</h1>

     <?php
     if(isset($_SESSION["success"])){
        ?>
        <div class="success"><?=$_SESSION["success"] ?></div>
        <?php
        unset($_SESSION["success"]);
     }
     if(isset($_SESSION["error"])){
        ?>
        <div class="error"><?=$_SESSION["error"] ?></div>
        <?php
        unset($_SESSION["error"]);
     }
     ?> 

    <a href="student-add.php">+Add Student</a>
    <table border="1" callspacing="0" width="1000">
        <thead>
        <tr>
            <th>sr.no</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>gender</th>
            <th>class</th>
            <th>fees</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
              if($studata->num_rows){
                $i = $studata->num_rows;
                 while($_students = mysqli_fetch_assoc($studata)){
                    ?>
                    <tr>
                        <td><?= $i-- ?></td>
                        <td><?= $_students["name"]?></td>
                        <td><?= $_students["email"] ?></td>
                        <td><?= $_students["phone"] ?></td>
                        <td><?= $_students["gender"] ?></td>
                        <td><?= $_students["class"] ?></td>
                        <td><?= $_students["fees"] ?></td>
                        <td><a href="student-edit.php?id=<?=$_students["id"] ?>">Edit</a>|<a href="student-delete.php?id=<?=$_students["id"] ?>">Delete</a></td>
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


