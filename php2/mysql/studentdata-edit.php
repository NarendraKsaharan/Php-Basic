
<?php

include_once("config.php");

$id = $_GET["id"]??0;

if($id){
    $selquery = "select * from studentdata where id=$id";
    $studata = $con->query($selquery);
    $_studentdata = mysqli_fetch_assoc($studata);
}else{
    $_SESSION["error"]="something went wrong...";
    header("location: studentdata-list.php");
}
?>

<!DOCTYPE htm
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studentdata-add</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
</head>
<body>
     <h1>Add New Studentdata</h1>
    <form action="studentdata-update.php" method="post" enctype="multipart/form-data"id="registration-form">
    <input type="hidden" name="id" value="<?= $_studentdata["id"]?>">
        <table>
          <table>
            <tr>
                <td>first name</td>
                <td><input type="text" name="firstname" value="<?= $_studentdata['firstname']??''; ?>"></td>
            </tr>
            <tr>
                <td>last name</td>
                <td><input type="text" name="lastname" value="<?= $_studentdata['lastname']??''; ?>"></td>
            </tr>
            <tr>
                <td>email id</td>
                <td><input type="text" name="emailid" value="<?= $_studentdata['emailid']??''; ?>"></td>
            </tr>
            <tr>
                <td>mobile number</td>
                <td><input type="text" name="mobilenumber" value="<?= $_studentdata['mobilenumber']??''; ?>"></td>
            </tr>
            <tr>
                <td>Date of Birth(DOB)</td>
                <td><input type="date" name="dateofbirth" id="dateofbirth" value="<?= $_studentdata['dateofbirth']??''; ?>"></td>
            </tr>
            <tr>
                <td>gender</td>
                <td>
                    <input type="radio" name="gender" value="m" <?= ($_studentdata["gender"]=="m")?"checked":""; ?>>male
                    <input type="radio" name="gender" value="f" <?= ($_studentdata["gender"]=="f")?"checked":""; ?>>female
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="address" id="address" cols="30" rows="0"><?= $_studentdata['address']??''; ?></textarea>
            </tr>
            <tr>
                <td>city</td>
                <td><input type="text" name="city" value="<?= $_studentdata['city']??''; ?>"></td>
            </tr>
            <tr>
                <td>pin code</td>
                <td><input type="text" name="pincode" value="<?= $_studentdata['pincode']??''; ?>"></td>
            </tr>
            <tr>
                <td>state</td>
                <td><input type="text" name="state" value="<?= $_studentdata['state']??''; ?>"></td>
            </tr>
            <tr>
                <td>country</td>
                <td><input type="text" name="country" value="<?= $_studentdata['country']??''; ?>"></td>
            </tr>
            <tr>
                <td>hobbies</td>
                <td>
                <?php                 
                  $hobbies = explode(" | " , $_studentdata["hobbies"]??0);
                    //  print_r($hobbies);
                    //  die;       
               ?>
                    <input type="checkbox" name="hobbies[]" id="hobbies" value="drawing" <?= (in_array("drawing", $hobbies))?"checked":""; ?>>Deawing
                    <input type="checkbox" name="hobbies[]" id="hobbies" value="singing" <?= (in_array("singing", $hobbies))?"checked":""; ?>>Singing
                    <input type="checkbox" name="hobbies[]" id="hobbies" value="dancing" <?= (in_array("dancing", $hobbies))?"checked":""; ?>>Dancing
                    <input type="checkbox" name="hobbies[]" id="hobbies" value="sketching" <?= (in_array("sketching", $hobbies))?"checked":""; ?>>Sketching<br>
                    <input type="checkbox" name="hobbies[]" id="hobbies" value="others" <?= (in_array("others", $hobbies))?"checked":""; ?>>Others
                     <input type="text" name="hobbies[]" id="hobbies" placeholder="Ex-......."> 
                </td>
            </tr>
            <td>Qualification</td>
                <td>
                <?php                 
                  $qualification = explode(" | " , $_studentdata["qualification"]??0);
                    //   print_r($qualification);
                    //   die;      
               ?>
                    <input type="checkbox" name="qualification[]" id="qualification" value="highschool(10th)" <?= (in_array("highschool(10th)", $qualification))?"checked":""; ?>>High school(10th)
                    <input type="checkbox" name="qualification[]" id="qualification" value="higherschool(12th)" <?= (in_array("higherschool(12th)", $qualification))?"checked":""; ?>>Higher school(12th)
                    <input type="checkbox" name="qualification[]" id="qualification" value="graduation(bachelors)" <?= (in_array("graduation(bachelors)", $qualification))?"checked":""; ?>>Graduation(Bachelors)
                    <input type="checkbox" name="qualification[]" id="qualification" value="postgraduation" <?= (in_array("postgraduation", $qualification))?"checked":""; ?>>Post Graduation
                    <input type="checkbox" name="qualification[]" id="qualification" value="phd" <?= (in_array("phd", $qualification))?"checked":""; ?>>phd
                </td>
            </tr>
            <td>Courses applied for</td>
                <td>
                    <input type="radio" name="coursesappliedfor" value="bca" <?= ($_studentdata["coursesappliedfor"]=="bca")?"checked":""; ?>>BCA(Bachelor of Computer Applications)<br>
                    <input type="radio" name="coursesappliedfor" value="b.com" <?= ($_studentdata["coursesappliedfor"]=="b.com")?"checked":""; ?>>B.Com(Bachelor of Commerce)<br>
                    <input type="radio" name="coursesappliedfor" value="b.sc" <?= ($_studentdata["coursesappliedfor"]=="b.sc")?"checked":""; ?>>B.Sc(Bachelor of Commerce)<br>
                    <input type="radio" name="coursesappliedfor" value="ba" <?= ($_studentdata["coursesappliedfor"]=="ba")?"checked":""; ?>>BA(Bachelor of Arts)<br>
                    <input type="radio" name="coursesappliedfor" value="mca" <?= ($_studentdata["coursesappliedfor"]=="mca")?"checked":""; ?>>MCA(Master of Computere)<br>
                    <input type="radio" name="coursesappliedfor" value="m.com" <?= ($_studentdata["coursesappliedfor"]=="m.com")?"checked":""; ?>>M.Com(Master of Commerce)<br>
                    <input type="radio" name="coursesappliedfor" value="msc" <?= ($_studentdata["coursesappliedfor"]=="msc")?"checked":""; ?>>M.Sc(Master of Science)<br>
                    <input type="radio" name="coursesappliedfor" value="ma" <?= ($_studentdata["coursesappliedfor"]=="ma")?"checked":""; ?>>MA(Master of Arts)<br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="reset">
                    <input type="submit" value="update">
                </td>
            </tr>
          </table>
    </form>
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