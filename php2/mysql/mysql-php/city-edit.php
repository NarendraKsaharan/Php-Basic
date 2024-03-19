<?php

include_once("config[1].php");

$id = $_GET["id"]??0;

if($id){
    $query = "SELECT * FROM city WHERE id='$id'";
    $city= $con->query($query);
    $_city = mysqli_fetch_assoc($city);
}else{
    $_SESSION["error"]="something went wrong...";
    header("location: city-list.php");
}

$counquery = "select * from country";
$country = $con->query($counquery);

$stquery = "select * from state";
$state = $con->query($stquery);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add new city</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
</head>
<body>
         <h1>add new city</h1>
             <form action="city-update.php" method="post" enctype="multipart/form-data"id="city-form">
             <input type="hidden" name="id" value="<?= $_city["id"]?>">
                 <table>
         
                 <tr>
         
            <td>Country</td>
            <td>
            <select name="country_id">
         
                <option value="">--countries--</option>
                <?php
         
                  while($data = mysqli_fetch_assoc($country)){
                ?>
                    <option value="<?=$data["id"]?>" <?= $data['id'] == $_city['country_id'] ? 'selected':'';?> name="country_id"><?= $data["name"]?></option>
                    <?php
                  }
                    ?>
            </select>
           </td>
         
            </tr>
         
           <tr>
         
           <td>State</td>
           <td>

         <select name="state_id">

          <option value="">--states--</option>
          <?php

         while($sdata = mysqli_fetch_assoc($state)){
         ?>
           <option value="<?=$sdata["id"]?>" <?= $sdata['id'] == $_city['state_id'] ? 'selected':'';?> name="state_id"><?= $sdata["name"]?></option>
           <?php
         }
           ?>
        </select>

         </td>
         
        </tr>
            <tr>
                <td>name</td>
                <td><input type="text" name="name" id="name" value="<?= $_city['name']??'' ?>"></td>
            </tr>
            <tr>
                <td>status</td>
                <td>
                   <select name="status" id="status">
                        <option value="">-selact option-</option>
                        <option value="1" <?=(($_city['status']??'')=="1")?"selected":""?>>Enable</option>
                        <option value="2" <?=(($_city['status']??'')=="2")?"selected":""?>>Disable</option>
                    </select>
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
            $("#city-form").validate({
                rules:{
                    "name":"required",
                    "status":"required",
                    "country_id":"required",
                    "state_id":"required",

                },
                messages:{
                    "name":"name is required",
                    "status":"status is required",
                    "country_id":"counrey is required",
                    "state_id":"state id is required",
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
