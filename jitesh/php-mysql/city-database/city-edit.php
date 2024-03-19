<?php
require_once('config.php');

$id = $_GET['id']??0;
if($id){
$cityquery = "SELECT * FROM `cities` where id=$id";
$citys = $con->query($cityquery);
$citydata = $citys->fetch_assoc();
}
$stid = $citydata['country_id'];
$intcountry = "SELECT * FROM countries";
$countrydata = $con->query($intcountry);

      $intstate = "SELECT * FROM states where country_id = $stid";
             $statedata = $con->query($intstate);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>

<form action="city-update.php" method="POST">
    <input type="hidden" name="id" value="<?=$citydata['id']?>">

<table>
<tr>
    <td><label for="name">Name</label></td>
    <td><input type="text" name="name" id="name" value="<?=$citydata['name']?>"></td>
</tr>
<tr> 
        <td><label for="country_id">Country name</label></td> 
       <td>
        <select name="country_id" id="country_id">
            <?php
         while($countryss = $countrydata->fetch_assoc()){
               ?>       
                <option value="<?= $countryss['id']?>" <?= ($countryss['id']==$citydata['country_id'])?'selected':'' ?>>
                <?= $countryss['name']?></option>   
       <?php      
   }
        ?>
</select>
</td>
</tr>
<tr>
    <td><label for="state_id">State_name</label></td>
    <td><select name="state_id" id="state_id">
          <?php 
               while($state = $statedata->fetch_assoc()){
                ?>
                      <option value="<?=$state['id']?>" <?= ($state['id']==$citydata['state_id'])?'selected':'' ?>>
                      <?=$state['name']?>
         <?php
               }
                   ?>
               </option>
    </select></td>
</tr>
<tr>
    <td><label for="status">Status</label></td>
    <td><select name="status" id="status">
        <option value="1" <?=($citydata['status'] == 1)?"selected":""?>>Enable</option>
        <option value="2" <?=($citydata['status'] == 2)?"selected":""?>>Disable</option>
    </select></td>
</tr>
<tr>
    <td><input type="reset" value="reset"></td>
    <td><input type="submit" value="update"></td>
</tr>
</table>
</form>
<script>
    $(document).ready(function(){
          $("#country_id").change(function(){
            countryid = $(this).val();
             
             $.ajax({
                url:"get-state.php",
                data:{"count_id": countryid},
                success: function(response){
                    $("#state_id").html(response);
                }
             });

          });



    });
</script>
    
</body>
</html>