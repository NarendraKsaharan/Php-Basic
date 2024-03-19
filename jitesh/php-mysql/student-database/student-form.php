<?php
session_start();
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
   <form action="student-save.php" method="POST" id="formid">
<table>
<tr>
    <td><label for="name">Name</label></td>
<td><input type="text" name="name" id="name"></td>
</tr>
<tr>
    <td><label for="roll_number">Roll_Number</label></td>
    <td><input type="number" name="roll_number" id="roll_number"></td>
</tr>
<tr>
    <td><label for="email">Email</label></td>
    <td><input type="email" name="email" id="email"></td>
</tr>
<tr>
    <td><label for="phone">Phone</label></td>
    <td><input type="tel" name="phone" id="phone"></td>
</tr>
<tr>
    <td><label for="gender">Gender</label></td>
    <td><input type="text" name="gender" id="gender"></td>
</tr>
<tr>
    <td><label for="fee">Fee</label></td>
    <td><input type="number" name="fee" id="fee"></td>
    
</tr>
<tr>
    <td><label for="address">Address</label></td>
    <td><input type="text" name="address" id="address"></td>
</tr>
<tr>
    <td><input type="reset" value="reset"></td>
    <td><input type="submit" value="submit"></td>
</tr>

</table>
   </form>
   <script>
   $(document).ready(function(){
    $("formid").validate({

        rules: {
          "name" : "required";
        },
        messages: {
         "name" : "name is required",
        };
    });




   });

   </script>
</body>
</html>