<?php

require_once("config.php");

$id = $_GET['id']??0;
if($id) {

    $selquery = "SELECT * FROM states WHERE id=$id ";
      $statedata = $con ->query($selquery) ;
         $statess = $statedata->fetch_assoc();
}
  $selquerys = "SELECT * FROM cities where state_id=$id";
     $citydata  = $con->query($selquerys);

         $intcountry = "SELECT * FROM countries";
           $countrydata = $con->query($intcountry);

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
    <h3>Edit state</h3>
   <form action="state-update.php" method="POST" id="formid">
    <input type="hidden" name="id" value="<?=$statess['id']?>">
<table>
<tr>
    <td><label for="name">Name</label></td>
<td><input type="text" name="name" id="name" value="<?= $statess['name'] ?>"></td>
</tr>
<tr>
    <td><label for="country_id">Country name</label></td>
        <td><select name="country_id" id="country_id">
           <?php
               while($country = $countrydata->fetch_assoc()){
                ?>
                   <option value="<?=$country['id']?>" <?= ($country['id']==$statess['country_id'])?'selected':'' ?>><?=$country['name']?>

                 <?php
                     }    
                   ?>
</option>
    </select></td>    
</tr>
<tr>
    <td><label for="status">Status</label></td>
    <td><select name="status" id="status">
        <option value="1" <?=($statess['status']==1)?"selected":""?>>Enable</option>
        <option value="2" <?=($statess['status']==2)?"selected":""?>>Disable</option>
    </select></td>
</tr>
<table id="table_row">
    <?php
    if($citydata->num_rows){
  ?>
    <tr> 
        <td><label for="city_name">City name</label></td>
        <td><label for="city_status">City status</label></td>
        
    </tr>
    <?php
    while($citys = $citydata->fetch_assoc()){
   ?>        <tr>
             <td><input type="hidden" name="city_id[]" value="<?=$citys['id']?> ">
                <input type="text" name="city_name[]" id="city_name" value="<?=$citys['name']?>"></td>
             <td><select name="city_status[]" id="city_status">
                <option value="1" <?=($citys['status']==1)?"selected":""?>>Enable</option>
                <option value="2" <?=($citys['status']==2)?"selected":""?>>Disable</option>
             </select></td>
             <td><input type="button" class="remove" value="x"></td>
             </tr>
       <?php
     }
        }
        ?>
</table>

<tr>
    <td><input type="reset" value="reset"></td>
       <td><input type="button" id="addmore" value="Add city"></td>
          <td><input type="submit" value="update"></td>
</tr>

</table >
   </form>
   <script>
  $(document).ready(function(){

   $("#addmore").click(function(){
     tablerow = ' <tr>\
      <td><input type="text" name="city_name[]" id="city_name"></td>\
             <td><select name="city_status[]" id="city_status">\
                <option value="1">Enable</option>\
                <option value="2">Disable</option>\
             </select></td>\
             <td><input type="button" class="remove" value="x"></td>\
             </tr> ';

          $("#table_row").append(tablerow);

   }); $("body").delegate(".remove", "click", function(){
       
       $(this).closest("tr").remove();
       
   });


  });

   </script>
  
</body>
</html>





