<?php

include_once("config.php");
$id = $_GET["id"]??0;

if($id){
    $selquery = "select * from students where id=$id";
    $studata = $con->query($selquery);
    $_student = mysqli_fetch_assoc($studata);
}else{
    $_SESSION["error"]="something went wrong...";
    header("location: student-list.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit student</title>
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
    <h1>edit Student</h1>
    <form action="student-update.php" method="post" enctype="multipart/form-data"id="registration-form">
        <input type="hidden" name="id" value="<?= $_student["id"]?>">
        <table>
            <tr>
                <td>Name <span style="color:red;"></span></td>
                <td><input type="text" name="name" id="name" value="<?= $_student['name']??''; ?>">
                <?php
                     if(isset($_SESSION['name_error']))
                    echo '<span class="error">'.$_SESSION['name_error'].'</span>';
                    unset($_SESSION['name_error']);
                  ?>
                </td>
            </tr>
            <tr>
                <td>Email <span style="color:red"></span></td>
                <td><input type="text" name="email" id="email" value="<?= $_student['email']??''; ?>">
                <?php
                     if(isset($_SESSION['email_error']))
                    echo '<span class="error">'.$_SESSION['email_error'].'</span>';
                    unset($_SESSION['email_error']);
                  ?>
                </td>
            </tr>
            <tr>
                <td>Phone <span style="color:red"></span></td>
                <td><input type="number" name="phone" id="phone" value="<?= $_student['phone']??''; ?>">
                <?php
                     if(isset($_SESSION['phone_error']))
                    echo '<span class="error">'.$_SESSION['phone_error'].'</span>';
                    unset($_SESSION['phone_error']);
                  ?>
                  </td>
            </tr>

            <tr>
                <td>gender <span style="color:red"></span></td>
                <td>

                    <input type="radio" name="gender"  value="m" <?= ($_student["gender"]=="m")?"checked":""; ?>>male
                    <input type="radio" name="gender"  value="f" <?= ($_student["gender"]=="f")?"checked":""; ?>>Female
                    <?php
                    if(isset($_SESSION['gender_error'])) {
                        echo '<span class="error">'.$_SESSION['gender_error'].'</span>';
                        unset($_SESSION['gender_error']);
                    }
                    ?>
                </td>
            </tr>
            <tr>

            <td>Class</td>
            <td>
            <?php                 
                  $class = explode(" / " , $_student["class"]??0);
                 // print_r($class);            
               ?>
           
             <input type="checkbox" name="class[]" id="class" value="10th" <?= (in_array("10th", $class))?"checked":""; ?>>10th <br>
             <input type="checkbox" name="class[]" id="class" value="12th" <?= (in_array("12th", $class))?"checked":"";?>>12th

             <?php
             if(isset($_SESSION['class_error'])) {
             echo '<span class="error">'.$_SESSION['class_error'].'</span>';
             unset($_SESSION['class_error']);
             }
             ?>
            </td>
            </tr>
            <tr>
                <td>Fees <span style="color:red"></span></td>
                <td><input type="text" name="fees" id="fees" value="<?= $_student['fees']??''; ?>">
                <?php
                     if(isset($_SESSION['fees_error']))
                    echo '<span class="error">'.$_SESSION['fees_error'].'</span>';
                    unset($_SESSION['fees_error']);
                  ?>
                  
                </td>
            </tr>
            <tr>
                <td><input type="reset"></td>
                <td><input type="submit" value="Update"></td>
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