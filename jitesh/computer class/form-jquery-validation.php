
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    
    <style>
        label.error{
            color: red;
        }
    </style>
</head>
<body>
    <form action="form-jquery-action.php" method="post" id="registrationForm">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" id="name" />
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" /></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>
                    <input type="tel" name="phone" />
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="M" /> Male<br>
                    <input type="radio" name="gender" value="F" /> FeMale<br>
                    <span class="error"></span>
                </td>
            </tr>
            <tr>
                <td>Class</td>
                <td>
                    <input type="checkbox" name="class[]" value="10th" /> 10th<br>
                    <input type="checkbox" name="class[]" value="12th" /> 12th<br>
                    <input type="checkbox" name="class[]" value="GRAD" /> Graduation<br>
                </td>
            </tr>

            <tr>
                <td>Country</td>
                <td>
                    <select name="country">
                        <option value="">-- Select Country --</option>
                        <option value="india" selected>India</option>
                        <option value="usa" >USA</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><br><input type="reset" name="reset" value="Reset" /></td>
                <td><br><input type="submit" name="submit" value="Submit" /></td>
            </tr>
        </table>
    </form>
<!-- <button id="delete">Delete</button> -->
<p>Paragraph</p>
<script>

$(document).ready(function(){
    
    $("form#registrationForm").validate({
        rules: {
            "name": "required",
            "email": {
                "required": true,
                "email": true
            },
            "phone": {
                "required": true,
                "number": true,
                "minlength": 10
            }
        },
        // messages: {
        //     "name": "Name is required.",
        //     "email": {
        //         "required": "Email requiredd",
        //         "email": "Enter valid email"
        //     },
        //     "phone": {
        //         "required": "Phone is required",
        //         "minlength": "Minimum 10"
        //     }
        // }
    });

    // $("p, input").click(function(){
    //     alert("P click");
    // });

    // $("#name").change(function(){
    //     console.log("Change called");
    // });
    // $("#name").keypress(function(){
    //     console.log("key presss");
    // });

    // $("#name").click(function(){
    //     alert("Clicked on name...");
    // });

    // $("#name").dblclick(function(){
    //     alert("Clicked on name...");
    // });

    // $("#name").hover(function(){
    //     console.log("Name hover called...");
    // });

    // $("#delete").click(function(){
    //     cnf = confirm("Are you to delete this??");
    //     if(cnf) {
    //         alert("Deletedd....");
    //     } else {
    //         alert("Not Deletedd....");
    //     }
    // });


});

</script>

</body>
</html>