<?php
include_once('config-pro.php');

$id = $_GET['pid']??0;

if ($id) {
    $selQuery = "SELECT * FROM `projects` WHERE id=$id";

    $selProject = $con->query($selQuery);

    $project = $selProject->fetch_assoc();
} 
// else {
//     header("location: project-list.php");
// }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <style>
        .main{
            width: 18%;
            margin: auto;
        }
        .register{
            width: 100%;
            padding: 20px;
            margin-top: 20%;
            border: 1px solid red;
            background: skyblue;
            border-radius: 10px;

        }
        input.submit {
            margin-left: 40%;
            padding: 8px 16px;
            border-radius: 12px;
        }
        fieldset{
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="register">
            <form action="project-update.php" method="post" id="register">
                <fieldset>
                    <legend>Personal Details</legend>
                        <input type="hidden" name="id" value="<?= $project['id'] ?>">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" value="<?= $project['fname'] ?>"><br><br>   
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" value="<?= $project['lname'] ?>"><br><br>
                        <label for="gender">Gender:</label>
                        <input type="radio" name="gender" id="male" value="male" <?= ($project['gender']=='male')?'checked':'' ?>>
                        <label>Male</label>
                        <input type="radio" name="gender" id="female" value="female" <?= ($project['gender']=='female')?'checked':'' ?>>
                        <label>Female</label><br><br>
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" value="<?= $project['email'] ?>"><br><br>
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" id="dob" value="<?= $project['dob'] ?>"><br><br>
                        <label for="address">Address</label>
                        <textarea name="address" id="address" cols="25" rows="3"><?= $project['address'] ?></textarea><br><br>
                        <input type="submit" name="submit" value="Submit" class="submit">
                    </fieldset>
            </form>
        </div>
    </div>
</body>
</html>