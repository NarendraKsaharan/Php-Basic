<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    /* box-sizing: border-box; */
}
body{
    background-color: #fff;
}
.main{
    width: 30%;
    margin: 48px auto 0px auto;
    
}
h2{
	width: 43%;
    margin: auto;
	padding-top: 30px;
	font-family: sans-serif;
    border-bottom: 1px solid;
    font-size: 20px;
}
.register {
	width: 100%;
	background: #f3f3f3;
	padding-bottom: 10px;
	border-radius: 6px;
	font-size: 17px;
    box-shadow: 2px 5px 15px 4px thistle;
}
#register {
	margin: 16px 36px;
}
label {
	margin-right: 24px;
}
input,textarea {
    margin-top: 6px;
}
span {
	font-size: 15px;
}
.top {
	margin-bottom: 64px;
    padding-top: 2px;
}
.left {
	display: inline;
	margin-left: 48px;
}
.mar {
    display: inline;
    margin-left: 1px;
}
#submit {
    padding: 8px 12px;
    font-size: 12px;
    border-radius: 3px; 
}
    </style>
</head>
<body>
    <div class="main">
        <div class="register">
            <h2>Registration Form</h2>
            <form id="register" action="form-save.php" method="post">
                <table align="center">
                    <tr>
                        <td><label for="fname">First Name</label></td>
                        <td><input type="text" name="fname" size="26"></td>
                    </tr>
                    <tr>
                        <td><label for="lname">Lsat Name</label></td>
                        <td><input type="text" name="lname" size="26"></td>
                    </tr>
                    <tr>
                        <td><label for="nname">Nick Name</label></td>
                        <td><input type="text" name="nname" size="26"></td>
                    </tr>
                    <tr>
                        <td><label for="email">e-mail</label></td>
                        <td><input type="text" name="email" size="26"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password</label></td>
                        <td><input type="password" name="password" size="26"></td>
                    </tr>
                    <tr>
                        <td><label for="dob">Date of Birth</label></td>
                        <td><input type="text" name="dob" size="26"></td>
                    </tr>
                    <tr>
                        <td><label>Gender</label></td>
                        <td>
                            <input type="radio" name="gender" value="male"><span>&nbsp;Male</span>&nbsp;&nbsp;
                            <input type="radio" name="gender" value="female"><span>&nbsp;Female</span>&nbsp;&nbsp;
                            <input type="radio" name="gender" value="other"><span>&nbsp;Other</span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="mobile">Mobile</label></td>
                        <td><input type="tel" name="mobile" size="26"></td>
                    </tr>
                    <tr>
                        <td><div class="top">Address</div></td>
                        <td><textarea name="address" id="address" cols="26" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><div class="mar"><input type="submit" name="submit" value="Submit" id="submit"></div><div class="left"><input type="reset" name="reset" id="submit"></div></td>
                    </tr>
                    
                </table>
            </form>
        </div>
    </div>
</body>
</html>