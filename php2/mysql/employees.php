<?php
include_once("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employees list</title>
</head>
<body>
    <?php
    $empquery="SELECT * FROM employees where first_name like '%b%' or first_name like '%s%' or first_name like '%d%'; ";
    $empdata=$con->query($empquery);

    ?>
     <table border="1" cellspacing="0" width="1350">
        <thead>
            <tr>
                 <th>sr.no.</th>
                 <th>employee_id</th>
                 <th>first_name</th>
                 <th>last_name</th>
                 <th>email</th>
                 <th>phone_number</th>
                 <th>hire_date</th>
                 <th>jod_id</th>
                 <th>salary</th>
                 <th>comission_pct</th>
                 <th>manager_id</th>
                 <th>department_id</th>
                 <th>Action</th>
            </tr>
        </thead>
        <tbody>
              <?php
                if($empdata->num_rows){
                    $i=1;
                    while($_employee=mysqli_fetch_assoc($empdata)){
                        ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $_employee["employee_id"]?></td>
                            <td><?= $_employee["first_name"]?></td>
                            <td><?= $_employee["last_name"]?></td>
                            <td><?= $_employee["email"]?></td>
                            <td><?= $_employee["phone_number"]?></td>
                            <td><?= $_employee["hire_date"]?></td>
                            <td><?= $_employee["jod_id"]?></td>
                            <td><?= $_employee["salary"]?></td>
                            <td><?= $_employee["comission_pct"]?></td>
                            <td><?= $_employee["manager_id"]?></td>
                            <td><?= $_employee["department_id"]?></td>
                            <td><a href="">Edit</a> | <a href="">Delete</a></td>

                        </tr>
                       <?php 
                    }
                }else{
                    ?>
                <tr>
                    <td colspan="13" align="center">NO record...</td>
                </tr>
                <?php
                }
              ?>
        </tbody>
     </table>    
</body>
</html>