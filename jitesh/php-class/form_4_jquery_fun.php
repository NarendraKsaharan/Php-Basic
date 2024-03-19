<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" ></script>
    <style>
    *{
        background-color: lightgreen;
    }
    input{
        padding: 10px;
    }
    .table{
        font-size:20px;
    }
    .select{
        padding: 10px;
    }
    label.error{
        color: red;
    }
    .bcolor{
        background-color: red !important;
    }
    .bcolorr{
        background-color: green;
    }
    input{
        font-size: 20px;
    }
    .show,.hide,.show_hide,.red_green{
        font-size: 20px;
        
    }
   
    </style>
</head>
<body>
    <form action="" method="post" id="registrationForm"  class="bcolor bcolorr">
<table class="table">
<tr>
    <td><label for="name">Name : </label></td>
    <td class="name-error"><input type="text" name="name" id="name"  > </td>
</tr>

<tr>
    <td><label for="father-name">Father's name : </label></td>
    <td><input type="text" name="father-name" id="father-name" ></td>
</tr>

<tr>
    <td><label for="roll-number">Roll namur : </label></td>
    <td><input type="number" name="roll-number" id="roll-number" ></td>
</tr>

<tr>
    <td><label for="email">Email : </label></td>
    <td><input type="email" name="email" id="email" ></td>
</tr>

<tr>
    <td><label for="password">Password : </label></td>
   <td> <input type="password" name="password" id="password" ></td>
</tr>

<tr>
    <td><label for="phone">Phone : </label></td>
    <td><input type="tel" name="phone" id="phone" ></td>
</tr>

<tr>
    <td><label for="subject">Subject : </label></td>
    <td>
        <input type="checkbox" name="ba" id="ba"><label for="ba">BA</label>
        <input type="checkbox" name="bsc" id="bsc"><label for="bsc">BSC</label>
        <input type="checkbox" name="bca" id="bca"><label for="bca">BCA</label>
        <input type="checkbox" name="bcom" id="bcom"><label for="bcom">BCOM</label>
    </td>
</tr>

<tr>
    <td><label for="gender">Gender : </label></td>
    <td>
        <input type="radio" name="gender" id="male"><label for="male">Male</label><br>
        <input type="radio" name="gender" id="female"><label for="female">Female</label>
    </td>
</tr>

<tr>
    <td><label for="address">Address</label></td>
    <td>
        <select class="select">
        <option value="churu">churu</option>
       <option value="ratangarh">ratangarh</option>
       <option value="sardarshahar" selected>sardarshahar </option>
       <option value="taranagar">taranagar</option>
       <option value="sujangarh">sujangarh</option>
       <option value="rajgarh">rajgarh</option>
        </select>
    </td>
</tr>

<tr>
    <td> <input type="reset" name="reset" value="Reset Form"></td>
    <td><input type="submit"  value="submit"></td>
</tr>
</table>
   </form>
  <button class="show">view</button>
  <button class="hide">hide</button>
  <button class="show_hide">show/hide</button> 
  <button class="red_green">red/green</button>
   <script>
$(document).ready(function(){

$(".show").click(function(){
    $("#registrationForm").show(1000);
});
$(".hide").click(function(){
    $("#registrationForm").hide(3000);
});
$(".show_hide").click(function(){
    $("#registrationForm").toggle(3000);
});

$(".red_green").click(function(){
    $("#registrationForm").toggleClass("bcolor");
});

//    $("#name").change(function(){
//       alert($(this).val());
//    })

//   $("#registrationForm").submit(function(e){

//           name = $("#name").val();

//        // $(".name-error").html("name is required...");
//         $(".name-error").append('<span class="error">Name is required...</span>');
//         e.preventDefault();




//     //     name = $("#name").val();
//     //    if(name == ""){
//     //     alert("name is empty...");
//     //      }
//     //    email = $("#email").val();
//     //    if(email == ""){
//     //     alert("email is empty...");
//     //    }
//     //    phone = $("#phone").val();
//     //    if(phone == ""){
//     //     alert ("phone is empty");
//     //    }

//        $("#name").val("fefef");
//   })

     
});





   </script>
</body>
</html>