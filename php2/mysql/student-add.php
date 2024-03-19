<?php

include_once("config.php");

//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New student</title>
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
    <h1>Add New Student</h1>
    <form action="student-save.php" method="post" enctype="multipart/form-data"id="registration-form">
        <table>
            <tr>
                <td>Name <span style="color:red;">*</span></td>
                <td><input type="text" name="name" id="name" value="<?= $_SESSION['name']??''; ?>">
                <?php
                     if(isset($_SESSION['name_error']))
                    echo '<span class="error">'.$_SESSION['name_error'].'</span>';
                    unset($_SESSION['name_error']);
                  ?>
                </td>
            </tr>
            <tr>
                <td>Email <span style="color:red">*</span></td>
                <td><input type="text" name="email" id="email" value="<?= $_SESSION['email']??''; ?>">
                <?php
                     if(isset($_SESSION['email_error']))
                    echo '<span class="error">'.$_SESSION['email_error'].'</span>';
                    unset($_SESSION['email_error']);
                  ?>
                </td>
            </tr>
            <tr>
                <td>Phone <span style="color:red">*</span></td>
                <td><input type="number" name="phone" id="phone" value="<?= $_SESSION['phone']??''; ?>">
                <?php
                     if(isset($_SESSION['phone_error']))
                    echo '<span class="error">'.$_SESSION['phone_error'].'</span>';
                    unset($_SESSION['phone_error']);
                  ?>
                  </td>
            </tr>

            <tr>
                <td>gender <span style="color:red">*</span></td>
                <td>

                    <input type="radio" name="gender" id="gender" value="m" <?= (($_SESSION['gender']??'')=="m")?"checked":""; ?>>male
                    <input type="radio" name="gender" id="gender" value="f" <?= (($_SESSION['gender']??'')=="f")?"checked":""; ?>>Female
                    <?php
                    if(isset($_SESSION['gender_error'])) {
                        echo '<span class="error">'.$_SESSION['gender_error'].'</span>';
                        unset($_SESSION['gender_error']);
                    }
                    ?>
                </td>
            </tr>
            <tr>
            <td>Class <span style="color:red">*</span></td>
            <td> 
               <?php
                  
                  $class = explode(" / " , ($_SESSION["class"]??""));
                 // print_r($class);            
                ?>
           
             <input type="checkbox" name="class[]" id="class" value="10th" <?= (in_array("10th", $class))?"checked":"" ?>>10th <br>
             <input type="checkbox" name="class[]" id="class" value="12th" <?= (in_array("12th", $class))?"checked":""?>>12th

             <?php
             if(isset($_SESSION['class_error'])) {
             echo '<span class="error">'.$_SESSION['class_error'].'</span>';
             unset($_SESSION['class_error']);
             }
             ?>
            </td>
            </tr>
            <tr>
                <td>Fees <span style="color:red">*</span></td>
                <td><input type="text" name="fees" id="fees" value="<?= $_SESSION['fees']??''; ?>">
                <?php
                     if(isset($_SESSION['fees_error']))
                    echo '<span class="error">'.$_SESSION['fees_error'].'</span>';
                    unset($_SESSION['fees_error']);
                  ?>
                  
                </td>
            </tr>
            <tr>
                <td><input type="reset"></td>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
    <?php
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['phone']);
        unset($_SESSION['gender']);
        unset($_SESSION['class']);
        unset($_SESSION['fees']);

        ?>
    <!-- <script>
        $(document).ready(function(){
            $("#registration-form").validate({
                rules:{
                    "name":"required",
                    "email":"required",
                    "phone":"required",
                    "gender":"required",
                    "class[]":"required",
                    "fees":"required"
                },
                messages:{
                    "name":"name is required",
                    "email":"email is required",
                    "phone":"phone is required",
                    "gender":"gender is required",
                    "class[]":"class is required",
                    "fees":"fees is required"
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