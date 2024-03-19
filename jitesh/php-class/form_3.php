
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
   
    </style>
</head>
<body>
    <form action="" method="post" id="registrationForm">
<table class="table">
<tr>
    <td><label for="name">Name : </label></td>
    <td><input type="text" name="name" id="name"  > </td>
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
   <!-- <p>Paragraph</p> -->
   <script>
$(document).ready(function(){

   $("form#registrationForm").validate({
      rules : {
              "name" : "required",
        "father-name" : "required",
        "roll-number" : "required",
           "email"    :{ 
            "required" : true,
            "email"  :  true
           },
           "phone" : {
            "required"  : true,
            "number"   :  true,
            "minlenght"  :  10
           },
           "password" : "required"
      },
      messages: {
         "name" : "name is required",
         "father-name"  : "father's name is required",
         "roll-number"  :  "roll-number is required",
         "email"   :     {
            "required" : "email is required",
            "email"   : "enter a valid email"
        },
          "phone"  :  {
            "required"  : "phone number is required",
            "number"    :  "enter a valid number",
            "minlenght"  : "please enter min ten digit"
          },
          "password"  :  "password is required"
      }    



   });


        // $("#name").keyup(function(){
        //     console.log("name is click");
        // });
        //  $("#name").keydown(function(){
        //     console.log("name is click");
        //  })    ;

    //   $("#name").mouseout(function(){
    //     console.log("name is click");
    //   });
           
    //   $("#name").mouseenter(function(){
    //     console.log("name is click");
    //   });
        //  $("#name").blur(function(){
        //     console.log("name is blur")
        //  })
    //    $("#name").change(function(){
    //      console.log("name is change")
    //    })
    //    $("#name").hover(function(){
    //      console.log("name is click")
    //    })
        // $("#name").keypress(function(){
        //     console.log("key is press")
        // })  
     
    //   $("#name").dblclick(function(){
    //     console.log("name is clicked")
    //   }) 
    // $("#name").click(function(){
    //     console.log("name is clicked");
    // })
    // $("#name").click(function(){
    //     alert("name is worng");
    // })




})





   </script>
</body>
</html>