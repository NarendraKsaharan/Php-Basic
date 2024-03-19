<?php
date_default_timezone_set("America/New_York");
echo date("F d, Y H:i:s A");

?>
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
        .error{
            color: red;
        }
        .fbgcolor {
            background: yellow;
        }
        .fbgcolorr {
            background: red !important;
        }
    </style>
</head>
<body>
    <button class="red_yellow">Red/Yellow</button>
    <button class="show">Show</button>
    <button class="hide">Hide</button>
    <form action="form-jquery-action.php" method="post" id="registrationForm" class="fbgcolor fbgcolorr">
        <table>
            <tr>
                <td>Name</td>
                <td class="name-error">
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
                    <select name="country" id="country">
                        <option value="">-- Select Country --</option>
                        <option value="india">India</option>
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

<script>

$(document).ready(function(){


    $("#country").change(function(){
        alert($(this).val());
    });


    $(".show").click(function(){
        $("#registrationForm").show(1000);
    });

    $(".hide").click(function(){
        $("#registrationForm").hide(3000);
    });

    $(".show_hide").click(function(){
        $("#registrationForm").toggle(1000);
    });

    $(".red_yellow").click(function(){
        $("#registrationForm").toggleClass("fbgcolorr");
    });
    
    // $("#registrationForm").submit(function(e){
    //     name = $("#name").val();
    //     email = $("#email").val();
    //     if(name=="") {
    //         //$(".name-error").html("Name is required...");
    //         $(".name-error").append('<span class="error">Name is required...</span>');
    //         e.preventDefault();
    //     }
    //     if(email=="") {
    //         e.preventDefault();
    //     }

    //     //$("#name").val("testtestest");
    // });
});

</script>

</body>
</html>