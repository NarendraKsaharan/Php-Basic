<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>form</form></title>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script> 
    
</head>
<body>
    <form action="form-save.php" method="post" enctype="multipart/form-data" id="registration-form">
     <table>
        <tr>
            <td>name<span style="color:red;">*</span></td>
            <td><input type="text" name="name" id="name" required></td>
        </tr>
        <tr>
            <td>Email<span style="color:red;">*</span></td>
            <td><input type="email" name="email" id="email" required></td>
        </tr>
        <tr>
            <td>Phone<span style="color:red;">*</span></td>
            <td><input type="number" name="phone" id="phone" required></td>
        </tr>
        <tr>
            <td>Age<span style="color:red;">*</span></td>
            <td><input type="number" name="age" id="age" required></td>
        </tr>
        <tr>
            <td>Gender<span style="color:red;">*</span></td>
            <td>
                <input type="radio" name="gender" value="m" required>Male<br>
                <input type="radio" name="gender" value="f" required>Female
        </td>
        </tr>
        <tr>
            <td>profile</td>
            <td><input type="file" name="profile" id="profile"></td>
        </tr>
        <tr>
                <td><input type="reset" name="reset" value="reset"></td>
                <td><input type="submit" name="submit" value="submit"></td>
        </tr>
     </table>
     </form>
    <script>
        $(document).ready(function(){
            // $("#Email").blur(function(){
            //     emailval = $(this).val();
            //     if(emailval==""){
            //         alert("Enter email");
            //     }else{
            //         alert("Yes email");
            //     }
            // });
            // $("#email").change(function(){
            //     alert("Email update");  
            // });
            //   $("input").focus(function(){
            //    $(this).css("background-color", "yellow");
            //    });

                
            // $("#age").focus(function(){
            //     alert("focus");  
            // });
            // $("#name").dblclick(function(){
            //     alert("Name DBLclicked");
            // });
            // $("#name").click(function(){
            //     alert("Name clicked");
            // });
            // $("#age").keypress(function(){
            //     alert("keypress clicked");
            // });
            // $("#email").keydown(function(){
            //     alert("keydown clicked");
            // });
            // $("#age").keyup(function(){
            //     alert("keyup clicked");
            // });
            // $("#name").mouseenter(function(){ 
            //     console.log("Mouse enter");
            // });
            // $("#input").resize(function(){
            //     console.log("resize enter");
            // });
            // $("#name").mouseleave(function(){
            //     console.log("Mouse leave");
            // });
            
            $("#registration-form").validate();
        });
    </script>
    <style>
        
        label.error {
            color: red;
            font-size: 12px;
        }
    </style>    
</body>
</html>
