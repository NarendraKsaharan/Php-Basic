
<?php

include_once("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studentdata-add</title>
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
     <h1>Add New Studentdata</h1>
    <form action="studentdata-save.php" method="post" enctype="multipart/form-data"id="registration-form">
          <table>
            <tr>
                <td>first name</td>
                <td><input type="text" name="firstname" value="<?= $_SESSION['firstname']??''; ?>">
                <?php
                    if(isset($_SESSION['firstname_error'])) {
                     echo '<span class="error">'.$_SESSION['firstname_error'].'</span>';
                     unset($_SESSION['firstname_error']);
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td>last name</td>
                <td><input type="text" name="lastname" value="<?= $_SESSION['lastname']??''; ?>">
                <?php
                    if(isset($_SESSION['lastname_error'])) {
                     echo '<span class="error">'.$_SESSION['lastname_error'].'</span>';
                     unset($_SESSION['lastname_error']);
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td>email id</td>
                <td><input type="text" name="emailid" value="<?= $_SESSION['emailid']??''; ?>">
                <?php
                    if(isset($_SESSION['emailid_error'])) {
                     echo '<span class="error">'.$_SESSION['emailid_error'].'</span>';
                     unset($_SESSION['emailid_error']);
                    }
                ?>
            </td>
            </tr>
            <tr>
                <td>mobile number</td>
                <td><input type="number" name="mobilenumber" id="mobilenumber" value="<?= $_SESSION['mobilenumber']??''; ?>">
                <?php
                    if(isset($_SESSION['mobilenumber_error'])) {
                     echo '<span class="error">'.$_SESSION['mobilenumber_error'].'</span>';
                     unset($_SESSION['mobilenumber_error']);
                    }
                ?>
               </td>
            </tr>
            <tr>
                <td>Date of Birth(DOB)</td>
                <td><input type="date" name="dateofbirth" id="dateofbirth" value="<?= $_SESSION['dateofbirth']??''; ?>">
                <?php
                    if(isset($_SESSION['dateofbirth_error'])) {
                     echo '<span class="error">'.$_SESSION['dateofbirth_error'].'</span>';
                     unset($_SESSION['dateofbirth_error']);
                    }
                ?>
            </td>
            </tr>
            <tr>
                <td>gender</td>
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
                <td>Address</td>
                <td><textarea name="address" id="address" cols="30" rows="0"><?= $_SESSION['address']??''; ?></textarea>
                <?php
                    if(isset($_SESSION['address_error'])) {
                     echo '<span class="error">'.$_SESSION['address_error'].'</span>';
                     unset($_SESSION['address_error']);
                    }
                ?>
                </td>       
            </tr>
            <tr>
                <td>city</td>
                <td><input type="text" name="city" value="<?= $_SESSION['city']??''; ?>">
                <?php
                    if(isset($_SESSION['city_error'])) {
                     echo '<span class="error">'.$_SESSION['city_error'].'</span>';
                     unset($_SESSION['city_error']);
                    }
                ?>
                </td>       
            </tr>
            <tr>
                <td>pin code</td>
                <td><input type="text" name="pincode" value="<?= $_SESSION['pincode']??''; ?>">
                <?php
                    if(isset($_SESSION['pincode_error'])) {
                     echo '<span class="error">'.$_SESSION['pincode_error'].'</span>';
                     unset($_SESSION['pincode_error']);
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td>state</td>
                <td><input type="text" name="state" value="<?= $_SESSION['state']??''; ?>">                
                <?php
                    if(isset($_SESSION['state_error'])) {
                     echo '<span class="error">'.$_SESSION['state_error'].'</span>';
                     unset($_SESSION['state_error']);
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td>country</td>
                <td><input type="text" name="country" value="<?= $_SESSION['country']??''; ?>">
                <?php
                    if(isset($_SESSION['country_error'])) {
                     echo '<span class="error">'.$_SESSION['country_error'].'</span>';
                     unset($_SESSION['country_error']);
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td>hobbies</td>
                <td>
                <?php
                  
                  $hobbies = explode(" | " , ($_SESSION["hobbies"]??""));
                 // print_r($hobbies);            
                ?>
                    <input type="checkbox" name="hobbies[]" value="drawing" <?= (in_array("drawing", $hobbies))?"checked":"" ?>>Deawing
                    <input type="checkbox" name="hobbies[]" value="singing" <?= (in_array("singing", $hobbies))?"checked":"" ?>>Singing
                    <input type="checkbox" name="hobbies[]" value="dancing" <?= (in_array("dancing", $hobbies))?"checked":"" ?>>Dancing
                    <input type="checkbox" name="hobbies[]" value="sketching" <?= (in_array("sketching", $hobbies))?"checked":"" ?>>Sketching<br>
                    <input type="checkbox" name="hobbies[]" value="others" <?= (in_array("others", $hobbies))?"checked":"" ?>>Others
                     <input type="text" name="hobbies[]" id="hobbies" placeholder="Ex-......."> 
                     <?php
                        if(isset($_SESSION['hobbies_error'])) {
                        echo '<span class="error">'.$_SESSION['hobbies_error'].'</span>';
                        unset($_SESSION['hobbies_error']);
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Qualification</td>
                <td>
                <?php
                  
                  $qualification = explode(" | " , ($_SESSION["qualification"]??""));
                 // print_r($qualification);            
                ?>
                    <input type="checkbox" name="qualification[]" value="highschool(10th)" <?= (in_array("highschool(10th)", $qualification))?"checked":"" ?>>High school(10th)
                    <input type="checkbox" name="qualification[]" value="higherschool(12th)" <?= (in_array("higherschool(12th)", $qualification))?"checked":"" ?>>Higher school(12th)
                    <input type="checkbox" name="qualification[]" value="graduation(bachelors)" <?= (in_array("graduation(bachelors)", $qualification))?"checked":"" ?>>Graduation(Bachelors)
                    <input type="checkbox" name="qualification[]" value="postgraduation" <?= (in_array("postgraduation", $qualification))?"checked":"" ?>>Post Graduation
                    <input type="checkbox" name="qualification[]" value="phd" <?= (in_array("phd", $qualification))?"checked":"" ?>>phd
                    <?php
                        if(isset($_SESSION['qualification_error'])) {
                        echo '<span class="error">'.$_SESSION['qualification_error'].'</span>';
                        unset($_SESSION['qualification_error']);
                        }
                    ?>
                </td>
            </tr>
            <tr>
                 <td>Courses applied for</td>
                <td>
                    <input type="radio" name="coursesappliedfor" value="bca" <?= (($_SESSION['coursesappliedfor']??'')=="bca")?"checked":""; ?>>BCA(Bachelor of Computer Applications)<br>
                    <input type="radio" name="coursesappliedfor" value="b.com" <?= (($_SESSION['coursesappliedfor']??'')=="b.com")?"checked":""; ?>>B.Com(Bachelor of Commerce)<br>
                    <input type="radio" name="coursesappliedfor" value="b.sc" <?= (($_SESSION['coursesappliedfor']??'')=="b.sc")?"checked":""; ?>>B.Sc(Bachelor of Commerce)<br>
                    <input type="radio" name="coursesappliedfor" value="ba" <?= (($_SESSION['coursesappliedfor']??'')=="ba")?"checked":""; ?>>BA(Bachelor of Arts)<br>
                    <input type="radio" name="coursesappliedfor" value="mca" <?= (($_SESSION['coursesappliedfor']??'')=="mca")?"checked":""; ?>>MCA(Master of Computere)<br>
                    <input type="radio" name="coursesappliedfor" value="m.com" <?= (($_SESSION['coursesappliedfor']??'')=="m.com")?"checked":""; ?>>M.Com(Master of Commerce)<br>
                    <input type="radio" name="coursesappliedfor" value="msc" <?= (($_SESSION['coursesappliedfor']??'')=="msc")?"checked":""; ?>>M.Sc(Master of Science)<br>
                    <input type="radio" name="coursesappliedfor" value="ma" <?= (($_SESSION['coursesappliedfor']??'')=="ma")?"checked":""; ?>>MA(Master of Arts)<br>
                    <?php
                        if(isset($_SESSION['coursesappliedfor_error'])) {
                        echo '<span class="error">'.$_SESSION['coursesappliedfor_error'].'</span>';
                        unset($_SESSION['coursesappliedfor_error']);
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="reset">
                    <input type="submit">
                </td>
            </tr>
          </table>
    </form>
    <?php
        unset($_SESSION['firstname']);
        unset($_SESSION['lastemail']);
        unset($_SESSION['emailid']);
        unset($_SESSION['mobilenumber']);
        unset($_SESSION['dateofbirth']);
        unset($_SESSION['gender']);
        unset($_SESSION['address']);
        unset($_SESSION['city']);
        unset($_SESSION['pincode']);
        unset($_SESSION['state']);
        unset($_SESSION['country']);
        unset($_SESSION['hobbies']);
        unset($_SESSION['qualification']);
        unset($_SESSION['coursesappliedfor']);
       

        ?>
        <script>
        $(document).ready(function(){
            $("#registration-form").validate({
                rules:{
                      "firstname":{
                       "required": true,
                       "maxlength": 50
                    },
                     "lastname":{
                        "required": true,
                        "maxlength": 50
                    },
                     "emailid":"required",
                    "mobilenumber":{
                        "required": true,
                        "minlength": 10,
                        "maxlength": 12
                    },
                    "dateofbirth":"required",
                    "gender": "required",
                    "address":"required",
                    "city":{
                       "required":true,
                       "maxlength":50
                    },
                    "pincode":{
                        "required":true,
                        "maxlength":6
                    },
                    "state":{
                        "required":true,
                        "maxlength":50
                    },
                    "country":"required",
                    "hobbies[]":{
                        "required":true,
                    },
                    "qualification[]":"required",
                    "coursesappliedfor":"required",
                },
                messages:{
                    "firstname":{
                       "required": " first name is required field",
                       "maxlength":  "Max 50 Characters Allowed"
                    },
                    "lastname":{
                        "required": "last name is required field",
                        "maxlength": "Max 50 Characters Allowed"
                    },
                    "emailid": "email is a required field",
                    "mobilenumber":{
                        "required": "mobilid is a required field",
                        "minlength": "10 Digits Allowed",
                        "maxlength": "Max 12 Digits Allowed"
                    },
                    "dateofbirth":"date of birth is a required field",
                    "gender": "gender is required field",
                    "address":"address is required field",
                    "city":{
                       "required":"city is required field",
                       "maxlength":"Max 50 Characters Allowed",
                    },
                    "pincode":{
                        "required":"pin code is required field",
                        "maxlength":"Max 6 Digits Allowed"
                    },
                    "state":{
                        "required":"state is a required field",
                        "maxlenght":"Max 50 Characters Allowed"
                    },
                    "country":"country is a required field",
                    "hobbies[]":{
                        "required":"hobbies is a required field",
                        "maxlenght":"Max 50 Characters Allowed"
                    },
                    "qualification[]":"qualification is a required",
                    "coursesappliedfor":"coursesappliedfor is a required",

                }

            });

        });
    </script>
    <style>
        
        label.error,.error {
            color: red;
            font-size: 12px;
        }
    </style>
</body>
</html>