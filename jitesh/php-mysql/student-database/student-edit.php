<?php

require_once("config.php");

$id = $_GET['id']??0;
if($id) {

    $selquery = "SELECT * FROM students where id=$id ";
    $studentdata = $con ->query($selquery) ;
    $studentss = $studentdata->fetch_assoc();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit student</h3>
   <form action="student-update.php" method="POST" >
    <input type="hidden" name="id" value="<?=$studentss['id']?>">
<table>
<tr>
    <td><label for="name">Name</label></td>
<td><input type="text" name="name" id="name" value="<?= $studentss['name'] ?>"></td>
</tr>
<tr>
    <td><label for="roll_number">Roll_Number</label></td>
    <td><input type="number" name="roll_number" id="roll_number" value="<?= $studentss['roll_number']?>"></td>
</tr>
<tr>
    <td><label for="email">Email</label></td>
    <td><input type="email" name="email" id="email" value="<?= $studentss['email']?>"></td>
</tr>
<tr>
    <td><label for="phone">Phone</label></td>
    <td><input type="tel" name="phone" id="phone" value="<?= $studentss['phone']?>"></td>
</tr>
<tr>
    <td><label for="gender">Gender</label></td>
    <td><input type="text" name="gender" id="gender" value="<?= $studentss['gender']?>"></td>
</tr>
<tr>
    <td><label for="fee">Fee</label></td>
    <td><input type="number" name="fee" id="fee" value="<?= $studentss['fee']?>"></td>
    
</tr>
<tr>
    <td><label for="address">Address</label></td>
    <td><input type="text" name="address" id="address" value="<?= $studentss['address']?>"></td>
</tr>
<tr>
    <td><input type="reset" value="reset"></td>
    <td><input type="submit" value="update"></td>
</tr>

</table>
   </form>
  
</body>
</html>





