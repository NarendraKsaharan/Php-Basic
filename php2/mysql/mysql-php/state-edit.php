<?php

include_once("config[1].php");

$id = $_GET["id"]??0;

$country="SELECT * FROM country";
$countrydata=$con->query($country);

if($id){
    $query = "SELECT * FROM state WHERE id='$id'";
    $state= $con->query($query);
    $_state = mysqli_fetch_assoc($state);
}else{
    $_SESSION["error"]="something went wrong...";
    header("location: state-list.php");
}

$cityquery = "SELECT * FROM city where state_id = $id";
$city = $con->query($cityquery);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> edit state</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
</head>
<body>
    <h1>edit state</h1>
    <form action="state-update.php" method="post" enctype="multipart/form-data"id="state-form">
    <input type="hidden" name="id" value="<?= $_state["id"]?>">
        <table>
        <tr>
                <td>country<td>
                 
                   <select name="country_id">
                        <option value="">-countries-</option>
                        <?php
                        while($data = mysqli_fetch_assoc($countrydata)){
                         ?>
                         <option value="<?= $data['id']?>"<?= $data['id'] == $_state['country_id'] ? 'selected':''; ?> name="country_id"><?= $data["name"]?></option>
                        <?php
                        }
                        ?>
                    </select>
                
           </tr>
            <tr>
            <tr>
                <td>name</td>
                <td><input type="text" name="name" id="name" value="<?= $_state['name'] ?>"></td>
            </tr>
            <tr>
                <td>status</td>
                <td>
                   <select name="status" id="status">
                        <option value="">-selact option-</option>
                        <option value="1" <?=(($_state['status']??'')=="1")?"selected":""?>>Enable</option>
                        <option value="2" <?=(($_state['status']??'')=="2")?"selected":""?>>Disable</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td valign="top">city</td>
                <table class="city_table">
             <tr>
                <th>NAME</th>
                <th>STATUS</th>
                <th><button type="button" class="add_more">+</button></th>
            </tr>
            <?php
                 while($citydata = mysqli_fetch_assoc($city)){
              ?>

            <tr>
                <td>
                <input type="hidden" name="city_id[]" value="<?= $citydata["id"]??'';?>"> 
                <input type="text" name="city_name[]" value="<?= $citydata['name']??''; ?>"></td>
                <td>
                   <select name="city_status[]">
                        <option value="">-selact option-</option>
                        <option value="1" <?=(($citydata['status']??'')=="1")?"selected":""?>>Enable</option>
                        <option value="2" <?=(($citydata['status']??'')=="2")?"selected":""?>>Disable</option>
                    </select>
                </td>
                <td><button type="button" class="remove">remove</butten></td>
            </tr>
            <?php
             }
            ?>
            </table>
          </tr> 
            <tr>
                <td><input type="reset"></td>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>

    </form>
    <script>
        $(document).ready(function(){
            $("#state-form").validate({
                rules:{
                    "name":"required",
                    "status":"required",
                    "country_id":"required",

                },
                messages:{
                    "name":"name is required",
                    "status":"status is required",
                    "country_id":"counrey is required",
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
                      <td><input type="text" name="city_name[]"></td>\
                      <td>\
                         <select name="city_status[]">\
                              <option value="">-selact option-</option>\
                              <option value="1">Enable</option>\
                              <option value="2">Disable</option>\
                          </select>\
                      </td>\
                       <td><button type="button" class="remove">X</butten></td>\
                    </tr>';           
        $(".city_table").append(rowhtml);
        });
         $(".city_table").delegate(".remove","click",function(){
           $(this).closest("tr").remove();
         });  
    });
</script>  