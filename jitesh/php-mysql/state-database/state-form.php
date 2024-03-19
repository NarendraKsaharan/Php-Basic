<?php
  require_once("config.php");
 
   $inscountry = "SELECT * FROM countries";
       $countrydata = $con->query($inscountry);

    //    $countryss = $countrydata->fetch_assoc();
     
    //    while($countryss = $countrydata->fetch_assoc()){
    //        echo implode("",$countryss)."<>";
    //    };

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
    <h3>State Form</h3>
   <form action="state-save.php" method="POST" id="formid">
<table>
<tr>
    <td><label for="name">Name</label></td>
<td><input type="text" name="name" id="name" ></td>
</tr>
    <tr> 
        <td><label for="country_id">Country name</label></td> 
       <td>
        <select name="country_id" id="country_id">
            <?php
         while($countryss = $countrydata->fetch_assoc()){
               ?>       
                <option value="<?= $countryss['id']?>"><?= $countryss['name']?></option>   
       <?php      
   }
        ?>
</select>
</td>
</tr>
<tr>
   <td><label for="status">Status</label></td>

   <td> <select name="status" id="status">
        <option value="1">Enable</option>
        <option value="2">disable</option>
    </select>
   </td>
</tr>
<table id="state_table">
    <tr>
        <td><label for="city_name">City name</label></td>
        <td><label for="city_status">City status</label></td>
        <td> &nbsp; &nbsp; &nbsp;</td>
        <td><input type="button" id="add_more" value="add city"></td>
        
    </tr>
    <tr>
        <td><input type="text" name="city_name[]" id="city_name"></td>
        <td><select name="city_status[]" id="city_status">
            <option value="1">Enable</option>
            <option value="2">disable</option>
        </select></td>
        <td><input type="button" class="remove" value="x"></td>
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
         tablerow = '<tr>\
        <td><input type="text" name="city_name[]" id="city_name"></td>\
        <td><select name="city_status[]" id="city_status">\
            <option value="1">Enable</option>\
            <option value="2">disable</option>\
        </select></td>\
        <td><input type="button" class="remove" value="x"></td>\
    </tr>';
    $("#state_table").append(tablerow);
   });
        $("body").delegate(".remove","click",function(){

         $(this).closest("tr").remove();


        });

             


        


   });

   </script>
</body>
</html>