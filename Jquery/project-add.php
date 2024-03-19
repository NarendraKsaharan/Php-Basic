<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <form action="project-save.php" method="post" id="register">
                <fieldset>
                    <legend>Personal Details</legend>
                        <label>Salutation</label><br>
                        <select name="salutation" id="sel">
                            <option value="">--None</option>
                        </select><br><br>
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname"><br><br>   
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname"><br><br>
                        <label for="gender">Gender:</label>
                        <input type="radio" name="gender" id="male" value="male">
                        <label>Male</label>
                        <input type="radio" name="gender" id="female" value="female">
                        <label>Female</label><br><br>
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email"><br><br>
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" id="dob"><br><br>
                        <label for="address">Address</label>
                        <textarea name="address" id="address" cols="25" rows="3"></textarea><br><br>
                        <input type="submit" name="submit" value="Submit" class="submit">
                    </fieldset>
            </form>
        </div>
    </div>
</body>
</html>