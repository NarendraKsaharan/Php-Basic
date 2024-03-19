<?php

include_once("config.php");

$id = $_GET["id"]??0;

if($id){
    $query = "SELECT * FROM `country` WHERE id='$id'";
    $country = $con->query($query);
    $_country = mysqli_fetch_assoc($country);
}else{
    $_SESSION["error"]="something went wrong...";
    header("location: country-list.php");
}

$statequery = "select * from `state` where country_id='$id'";
$state = $con->query($statequery);
// $statedata = mysqli_fetch_assoc($state);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> edit country</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    
</head>
<body>
    <h1>edit country</h1>
    <form action="country-update.php" method="post" enctype="multipart/form-data"id="country-form">
    <input type="hidden" name="id" value="<?= $_country["id"]?>">
        <table>
            <tr>
                <td>name</td>
                <td><input type="text" name="name" value="<?= $_country['name']??''; ?>"></td>
            </tr>
            <tr>
                <td>status</td>
                <td>
                    <select name="status" id="status">
                        <option value="">-selact option-</option>
                        <option value="1" <?=(($_country['status']??'')=="1")?"selected":""?>>Enable</option>
                        <option value="2" <?=(($_country['status']??'')=="2")?"selected":""?>>Disable</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td valign="top">states</td>
                <td>
                <table class="state_table">
             <tr>
                <th>NAME</th>
                <th>STATUS</th>
                <th><button type="button" class="add_more">+</button></th>
            </tr>
              <?php
                if($state->num_rows){
                 while($statedata = mysqli_fetch_assoc($state)){
              ?>

            <tr>
                <td>
                <input type="hidden" name="state_id[]" value="<?= $statedata["id"]??'';?>">    
                <input type="text" name="state_name[]" value="<?= $statedata['name']??''; ?>"></td>
                <td>
                   <select name="state_status[]">
                        <option value="">-select option-</option>
                        <option value="1" <?=(($statedata['status']??'')=="1")?"selected":""?>>Enable</option>
                        <option value="2" <?=(($statedata['status']??'')=="2")?"selected":""?>>Disable</option>
                    </select>
                </td>
                <td><button type="button" class="remove">remove</butten></td>
            </tr>
            <?php
                 }
                }
            ?>
            </table>
            </td>
          </tr> 
            <tr>
                <td><input type="reset"></td>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>

    </form>
    <script>
        $(document).ready(function(){
            $("#country-form").validate({
                rules:{
                    "name":"required",
                    "status":"required",

                },
                messages:{
                    "name":"name is required",
                    "status":"status is required",
                }
            });

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
<script>
    $(document).ready(function(){
        $(".add_more").click(function(){       
        rowhtml = '<tr>\
                      <td><input type="text" name="state_name[]"></td>\
                      <td>\
                         <select name="state_status[]">\
                              <option value="">-selact option-</option>\
                              <option value="1">Enable</option>\
                              <option value="2">Disable</option>\
                          </select>\
                      </td>\
                       <td><button type="button" class="remove">X</butten></td>\
                    </tr>';           
        $(".state_table").append(rowhtml);
        });
         $(".state_table").delegate(".remove","click",function(){
           $(this).closest("tr").remove();
         });  
    });
</script> 
