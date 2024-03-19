<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
</head>
<body>
    <?php
    if(isset($_SESSION['error'])) {
        echo '<span class="error">'.$_SESSION['error'].'</span>';
        unset($_SESSION['error']);
    }
    ?>
    <h3>Tutorials Point Absolute classes registration</h3>
    <form action="form-save3.php"method="post"enctype="multipart/form-data"id="registration-form">
        <table>
              <tr>
                <td>Name:<span style="color:red;">*</span></td>
                <td><input type="text"name="name"id="name"value="<?= $_SESSION['name']??''; ?>">
                <?php
                     if(isset($_SESSION['name_error']))
                    echo '<span class="error">'.$_SESSION['name_error'].'</span>';
                    unset($_SESSION['name_error']);
                  ?>
              </td>
              </tr>
              <tr>
                <td>E-mail:<span style="color:red;">*</span></td>
                <td><input type="email"name="email"id="email"value="<?= $_SESSION['email']??''; ?>">
                <?php
                  if(isset($_SESSION['email_error']))
                   echo '<span class="error">'.$_SESSION['email_error'].'</span>';
                    unset($_SESSION['email_error']);
                     ?>
               </td>
              </tr>
              <tr>
                <td>Specific Time:<span style="color:red;">*</span></td>
                <td><input type="text"name="specifictime"id="specifictime"value="<?= $_SESSION['specifictime']??''; ?>">
                <?php
                    if(isset($_SESSION['specifictime_error'])) {
                        echo '<span class="error">'.$_SESSION['specifictime_error'].'</span>';
                        unset($_SESSION['specifictime_error']);
                    }
                    ?>
            
               </td>
              </tr>
              <tr>
                <td>Class details:<span style="color:red;">*</span></td>
                <td><textarea name="classdetails"id="classdetails"cols="10"rows="5"><?=$_SESSION['classdetails']??'';?></textarea>
                <?php
                if(isset($_SESSION['classdetails_error']))
                   echo '<span class="error">'.$_SESSION['classdetails_error'].'</span>';
                    unset($_SESSION['classdetails_error']);
                     ?>
               </td>
              </tr>
              <tr>
                <td>Gender: <span style="color:red;">*</span></td>
                <td>
                <input type="radio" name="gender" value="m" <?= (($_SESSION['gender']??'')=="m")?"checked":""; ?>>male
                  <input type="radio" name="gender" value="f" <?= (($_SESSION['gender']??'')=="f")?"checked":""; ?>>female
                  <?php
                    if(isset($_SESSION['gender_error'])) {
                        echo '<span class="error">'.$_SESSION['gender_error'].'</span>';
                        unset($_SESSION['gender_error']);
                    }
                    ?>
                
                </td>
              </tr>
              <tr>
                <td><input type="submit"name="submit"id="submit"></td>
              </tr>
        </table>
    </form>
         <?php
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['specifictime']);
        unset($_SESSION['classdetails']);
        unset($_SESSION['gender']);

        ?>
    <!-- <script>
        $(document).ready(function(){
           $("#registration-form").validate({
              rules:{
                "name":"required",
                "email":{
                     "required":true,
                     "email":true
                },
                "specifictime":"required",
                "classdetails":"required",
                 "gender":"required"
              },
              messages:{
                "name":"name is required",
                "email":{
                     "required":"email is required",
                     "email":"enter a valid email"
                },
                "specifictime":"specifictime is required",
                "classdetails":"classdetails is required",
                 "gender":"gender is required"
              }
        
           }); 
        });
    </script> -->
        <style>
        
        label.error,.error {
            color: red;
            font-size: 12px;
        }
    </style>
</body>
</html>