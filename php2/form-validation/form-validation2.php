
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
    <form action="form-save2.php" method="post" enctype="multipart/form-data" id="registration-form">
        <table>
             <tr>
                <td>job Title:<span style="color:red;">*</span></td>
                <td><input type="text" name="jobtitle" id="jobtitle" value="<?= $_SESSION['jobtitle']??''; ?>">
                <?php
                    if(isset($_SESSION['jobtitle_error'])) {
                        echo '<span class="error">'.$_SESSION['jobtitle_error'].'</span>';
                        unset($_SESSION['jobtitle_error']);
                    }
                    ?>
                    </td>
               </tr>
             <tr>
             <td>Description:<span style="color:red;">*</span></td>
             <td><textarea name="description" id="description" cols="10" rows="5"><?=$_SESSION['description']??'';?></textarea>
             <?php
                    if(isset($_SESSION['description_error'])) {
                        echo '<span class="error">'.$_SESSION['description_error'].'</span>';
                        unset($_SESSION['description_error']);
                    }
                    ?>
                    </td>
            </tr>
             <tr>
                <td>Company Name:<span style="color:red;">*</span></td>
                <td><input type="text" name="companyname" id="companyname" value="<?=$_SESSION['companyname']??''; ?>">
                <?php
                    if(isset($_SESSION['companyname_error'])) {
                        echo '<span class="error">'.$_SESSION['companyname_error'].'</span>';
                        unset($_SESSION['companyname_error']);
                    }
                    ?>
                    </td>
               </tr>
             <tr>
                <td>Contact number:<span style="color:red;">*</span></td>
                <td><input type="number" name="contactnumber" id="contactnumber" value="<?=$_SESSION['contactnumber']??''; ?>">
                <?php
                    if(isset($_SESSION['contactnumber_error'])) {
                        echo '<span class="error">'.$_SESSION['contactnumber_error'].'</span>';
                        unset($_SESSION['contactnumber_error']);
                    }
                    ?>
                    </td>
               </tr>
             <tr>
                <td>Contact person:<span style="color:red;">*</span></td>
                <td><input type="text" name="contactperson" id="contactperson" value="<?= $_SESSION['contactperson']??''; ?>">
                <?php
                    if(isset($_SESSION['contactperson_error'])) {
                        echo '<span class="error">'.$_SESSION['contactperson_error'].'</span>';
                        unset($_SESSION['contactperson_error']);
                    }
                    ?>
                    </td>
               </tr>
             <tr>
                <td>Email:<span style="color:red;">*</span></td>
                <td><input type="text" name="email" id="email" value="<?=$_SESSION['email']??''; ?>">
                <?php
                    if(isset($_SESSION['email_error'])) {
                        echo '<span class="error">'.$_SESSION['email_error'].'</span>';
                        unset($_SESSION['email_error']);
                    }
                    ?>
                    </td>
               </tr>
             <tr>
                <td>Word Status:<span style="color:red;">*</span></td>
                <td>
                    <input type="checkbox" name="wordstatus[]" id="wordstatus" value="fulltime"<?= (in_array("fulltime", ($_SESSION['wordstatus']??[])))?"checked":""; ?>>Full Time
                    <input type="checkbox" name="wordstatus[]" id="wordstatus" value="parttime"<?= (in_array("parttime", ($_SESSION['wordstatus']??[])))?"checked":""; ?>>Part Time
                    <input type="checkbox" name="wordstatus[]" id="wordstatus" value="perdim"<?= (in_array("perdim", ($_SESSION['wordstatus']??[])))?"checked":""; ?>>per Dim
                    <input type="checkbox" name="wordstatus[]" id="wordstatus" value="others"<?= (in_array("others", ($_SESSION['wordstatus']??[])))?"checked":""; ?>>Others
                    <?php
                    if(isset($_SESSION['wordstatus_error'])) {
                        echo '<span class="error">'.$_SESSION['wordstatus_error'].'</span>';
                        unset($_SESSION['wordstatus_error']);
                    }
                    ?>
                </td>
             </tr>
             <tr>
                <td>Salary:<span style="color:red;">*</span></td>
                <td>
                    <input type="number" name="salary" id="salary">
                    <select name="currency">
                    <option>US Doller</option>
                    <option>INR</option>
                    </select>
                    <select name="Yesrly">
                    <option>Yearly</option>
                    <option>monthly</option>
                    </select>
                </td>
             </tr>
             <tr>
                <td>Experience(Years):<span style="color:red;">*</span></td>
                <td><input type="text" name="experience" id="experience" value="<?=$_SESSION['experience']??''; ?>">
                <?php
                    if(isset($_SESSION['experience_error'])) {
                        echo '<span class="error">'.$_SESSION['experience_error'].'</span>';
                        unset($_SESSION['experience_error']);
                    }
                    ?>
                </td>
             </tr>
             <tr>
                <td>Locations:<span style="color:red;">*</span></td>
                <td><input type="text" name="locations" id="locations" value="<?=$_SESSION['locations']??''; ?>">
                <?php
                    if(isset($_SESSION['locations_error'])) {
                        echo '<span class="error">'.$_SESSION['locations_error'].'</span>';
                        unset($_SESSION['locations_error']);
                    }
                    ?>
               </td>
             </tr>
             <tr>
                <td>Qualifications:<span style="color:red;">*</span></td>
                <td>
                    
                    </select>
                    <select>
                    <option>Any</option>
                    <option>High School</option>
                    <option>Associate</option>
                    <option>Pre Bachelors</option>
                    </select>
                    <input type="button" name="ADD" value="ADD>>">
                    <input type="button" name="Remove" value="<<Remove">
                    <input type="text" name="Any" placeholder="Any">

            </td>
             </tr>
             <tr>
                <td><input type="Submit" name="Submit" id="Submit">
                <input type="Reset" name="Reset" id="Reset"></td>
             </tr>
        </table>
    </form>
    <?php
unset($_SESSION['jobtitle']);
unset($_SESSION['description']);
unset($_SESSION['companyname']);
unset($_SESSION['contactnumber']);
unset($_SESSION['contactperson']);
unset($_SESSION['email']);
unset($_SESSION['experience']);
unset($_SESSION['locations']);
unset($_SESSION['wordstatus']);

?>
<!-- <script>
        $(document).ready(function(){
            $("#registration-form").validate({
                rules: {
                    "jobtitle":{
                       "required": true,
                        "maxlength": 50
                    },
                    "description":{
                        "required": true,
                        "maxlength": 500,
                        "minlength": 10
                    },
                    "companyname":"required",
                    "contactnumber":"required",
                    "contactperson":"required",

                    "email":{
                        "required": true,
                        "email": true
                    },
                },
                messages: {
                    "jobtitle":{
                       "required": "job Title is a required field",
                        "maxlength":"Enter valid job Title" 
                    },
                    "description":{
                        "required":"Description is required",
                        "maxlength": "please enter 500 digit only",
                        "minlength": "please enter atleast 10 digit only"
                    },
                    "companyname":"Company Name is a required field",
                    "contactnumber":"Contact number is a required field",
                    "contactperson":"Contact person is a required field",

                    "email":{
                        "required": "Email is required",
                        "email": "Enter valid email"
                    },
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