<?php
include_once("config[1].php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>state-list</title>
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
       $query = "select * from state order by id desc";
        //$query = "select s.*, c.name as country_id from state as s INNER JOIN country as c ON c.id=s.country_id";
       $state = $con->query($query);
    ?>
    <h1>state-list</h1>
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
    <a href="state-add.php">++Add state</a>
    <table border="1" callspacing="0" width="800" bgcolor=" #e600ac">
        <thead>
            <tr bgcolor=" yellow">
                <th>sr.no</th>
                <th>name</th>
                <th>country_id</th>
                <th>status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
             if($state->num_rows){
                $i=1;
                while($_state = mysqli_fetch_assoc($state)){
                     ?>
                     <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $_state["name"] ?></td>
                        <td><?= $_state["country_id"] ?></td>
                        <td><?= $_state["status"] ?></td>
                        <td><a href="state-edit.php?id=<?=$_state["id"] ?>">Edit</a>|<a href="state-delete.php?id=<?=$_state["id"] ?>">Delete</a></td>
                     </tr>
                     <?php
                }
             }else{
                ?>
                <tr>
                <td colspan="5" align="center">NO record...</td>
                </tr>
                <?php
             }
            ?>
        </tbody>

    </table>
</body>
</html>