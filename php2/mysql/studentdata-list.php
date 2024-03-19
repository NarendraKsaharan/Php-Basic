<?php

include_once("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studentdata-list</title>
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
        $query = "select * from studentdata";
        $sdquery = $con->query($query);

    ?>
       <h1>studentdata-list</h1>
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

    <a href="studentdata-add.php">++Add Studentdata</a>
       <table border="1" callspacing="0" width="700">
           <thead>
                 <tr>
                    <th>sr.no</th>
                    <th>first name</th>
                    <th>last name</th>
                    <th>email id</th>
                    <th>mobile number</th>
                    <th>gender</th>
                    <th>date of birth(DOB)</th>
                    <th>address</th>
                    <th>city</th>
                    <th>pin code</th>
                    <th>state</th>
                    <th>country</th>
                    <th>hobbies</th>
                    <th>qualification</th>
                    <th>courses applied for</th>
                    <th>Action</th>
                    
                 </tr>
           </thead>
           <tbody>
                  <?php
                     if($sdquery->num_rows){
                        $i=$sdquery->num_rows;
                        while($_studentdata =mysqli_fetch_assoc($sdquery)){
                            ?>
                            <tr>
                            <td><?= $i-- ?></td>
                            <td><?= $_studentdata["firstname"] ?></td>
                            <td><?= $_studentdata["lastname"] ?></td>
                            <td><?= $_studentdata["emailid"] ?></td>
                            <td><?= $_studentdata["mobilenumber"] ?></td>
                            <td><?= $_studentdata["gender"] ?></td>
                            <td><?= $_studentdata["dateofbirth"] ?></td>
                            <td><?= $_studentdata["address"] ?></td>
                            <td><?= $_studentdata["city"] ?></td>
                            <td><?= $_studentdata["pincode"] ?></td>
                            <td><?= $_studentdata["state"] ?></td>
                            <td><?= $_studentdata["country"] ?></td>
                            <td><?= $_studentdata["hobbies"] ?></td>
                            <td><?= $_studentdata["qualification"] ?></td>
                            <td><?= $_studentdata["coursesappliedfor"] ?></td>
                            <td><a href="studentdata-edit.php?id=<?=$_studentdata["id"] ?>">Edit</a>|<a href="studentdata-delete.php?id=<?=$_studentdata["id"] ?>">Delete</a></td>
                         </tr>
                         <?php
                        }
                     }else{
                        ?>
                        <tr>
                            <td colspan="16" align="center">NO record...</td>
                        </tr>
                        <?php
                     }
                  ?>

           </tbody>
       </table>
</body>
</html>