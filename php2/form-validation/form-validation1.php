<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>form </title>
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
    <?php
    //echo date("d-m-y");
    //echo date("D-m-y");
    //echo date("dS-m-y");
    //echo date("z-dS-m-y");
    //echo date("W-dS-m-y");
    //echo date("L-dS-m-y");
    //echo date("F-dS-m-y");
   // echo date("w-dS-m-y");
    echo date("dS-m-o h:i:sA");
    ?>
   <form action="form-save1.php" method="post" enctype="multipart/form-data" id="Registration-form">
      <table>
         <tr>
            <td>name<span style="color:red;">*</span></td>
            <td><input type="text" name="name" id="name"value="<?= $_SESSION['name']??''; ?>">
            <?php
                    if(isset($_SESSION['name_error'])) {
                        echo '<span class="error">'.$_SESSION['name_error'].'</span>';
                        unset($_SESSION['name_error']);
                    }
                    ?>
         </td>
         </tr>
         <tr>
            <td>Email<span style="color:red;">*</span></td>
            <td><input type="email" name="email"id="email" value="<?= $_SESSION['email']??''; ?>">
            <?php
                    if(isset($_SESSION['email_error'])) {
                        echo '<span class="error">'.$_SESSION['email_error'].'</span>';
                        unset($_SESSION['email_error']);
                    }
                    ?>
         </td>
         </tr>
         <tr>
            <td>password<span style="color:red;">*</span></td>
            <td><input type="password" name="password" id="password" value="<?= $_SESSION['email']??''; ?>">
            <?php
                    if(isset($_SESSION['password_error'])) {
                        echo '<span class="error">'.$_SESSION['password_error'].'</span>';
                        unset($_SESSION['password_error']);
                    }
                    ?>
         </td>
         </tr>
         <tr>
            <td>phone <span style="color:red;">*</span></td>
            <td><input type="number" name="phone" id="phone"  value="<?= $_SESSION['phone']??''; ?>">
            <?php
                    if(isset($_SESSION['phone_error'])) {
                        echo '<span class="error">'.$_SESSION['phone_error'].'</span>';
                        unset($_SESSION['phone_error']);
                    }
                    ?>
         </td>
         </tr>
         <tr>
         <tr>
            <td>age <span style="color:red;">*</span></td>
            <td><input type="number" name="age" id="age" value="<?= $_SESSION['age']??''; ?>">
            <?php
                    if(isset($_SESSION['age_error'])) {
                        echo '<span class="error">'.$_SESSION['age_error'].'</span>';
                        unset($_SESSION['age_error']);
                    }
                    ?>
         </td>
         </tr>
         <tr>
            <td>gender:<span style="color:red;">*</span></td>

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
            <td>profile <span style="color:red;">*</span></td>
            <td><input type="file" name="profile" id="profile"></td>
        </tr>
         <tr>
            <td><input type="submit" name="submit"value="submit"></td>
            <td><input type="reset" name="reset"value="reset"></td>
         </tr>
      </table>
   </form>

   <?php
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
unset($_SESSION['password']);
unset($_SESSION['age']);
unset($_SESSION['gender']);
?>
   
   <script>
        // $(document).ready(function(){
        //     $("#Registration-form").validate({
        //         rules: {
        //             "name":{
        //                "required": true,
        //                 "maxlength": 25
        //             },
        //             "email":{
        //                 "required": true,
        //                 "email": true
        //             },
        //              "password":"required",
        //             "phone":{
        //                 "required": true,
        //                "maxlength": 12,
        //                 "minlength": 10
        //             },
        //             "age":{
        //                 "required": true,
        //                 "max":100,
        //                 "min": 18
        //             }
        //         },
        //         messages: {
        //             "name":{
        //                "required": "Name is a required field",
        //                 "maxlength":"Enter valid name" 
        //             },
        //             "email":{
        //                 "required": "Email is required",
        //                 "email": "Enter valid email"
        //             },
        //             "password":"passwoed is a required field",
        //             "phone":{
        //                 "required": "phone is required",
        //                 "maxlength": "please enter 12 digit only",
        //                 "minlength": "please enter atleast 10 digit only"
        //             },
        //             "age":{
        //                 "required": "Age required",
        //                 "max": "Not greter 100",
        //                 "min": "Not less 18"
        //             }
        //         }
        //     });
            
            
        // });
    </script>
        <style>
        label.error,.error {
            color: red;
            font-size: 12px;
        }
    </style>
</body>
</html>