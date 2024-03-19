<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <style>
         label.error{
        color: red;
    }
    </style>
</head>
<body>
    <h3>Country Form</h3>
   <form action="country-save.php" method="POST" id="formid">
<table>
<tr>
    <td><label for="name">Name</label></td>
<td><input type="text" name="name" id="name"></td>
</tr>


<tr>
   <td><label for="status">Status</label></td>

   <td> <select name="status" id="status">
        <option value="1">Enable</option>
        <option value="2">disable</option>
    </select>
   </td>
   <td><br><br></td>
</tr>

<table id="state_table" width="300">
        <tr>
            <td>State Name</td>
            <td>Status</td>
            <td></td>
        </tr>
        <tr>
            <td><input type="text" name="state_name[]" ></td>
            <td>
                <select name="state_status[]">
                    <option value="1">Enable</option>
                    <option value="2">Disable</option>
                </select>
            </td>
            <td><input type="button" class="remove" value="X" ></td>
            <td ><button type="button" id="add_more">  Add + </button></td>
        </tr>
    </table>



<tr>
    <td><input type="reset" value="reset"></td>
    <td><input type="submit" value="submit"></td>
</tr>

</table>

   </form>
   <script>
   $(document).ready(function(){
  
    $("#add_more").click(function(){
        tableRow = '<tr>\
            <td><input type="text" name="state_name[]" ></td>\
            <td>\
                <select name="state_status[]">\
                    <option value="1">Enable</option>\
                    <option value="2">Disable</option>\
                </select>\
            </td>\
            <td><input type="button" class="remove" value="X" ></td>\
        </tr>';

        $("#state_table").append(tableRow);
        

    });
    $("body").delegate(".remove", "click", function(){
       
        $(this).closest("tr").remove();
        
    });

   });

   </script>
</body>
</html>