<?php
       require_once('config.php');
        
        $intcountry = "SELECT * FROM countries";
           $countrydata = $con->query($intcountry);

           $intstate = "SELECT * FROM states";
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
         <h3>City Form</h3>
    
<form action="city-save.php" method=post>

<table>
<tr>
<td><label for="name">Name</label></td>
<td><input type="text" name="name" id="name"></td>
</tr>
<tr> 
        <td><label for="country_id">Country name</label></td> 
       <td>
        <select name="country_id" id="country_id">
        <option value="" >--- Select Country ---</option>
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
               <td><label for="state_id">State_name</label></td>
                     <td><select name="state_id" id="state_id">
                     <option value="" >--- Select State ---</option>
              
    </select></td>
</tr>
<tr>
         <td><label for="status">Status</label></td>
            <td><select name="status" id="status">
               <option value="1">Enable</option>
              <option value="2">disable</option>
          </select></td>
</tr>
<tr>
    <td><input type="reset" value="reset"></td>
    <td><input type="submit" value="submit"></td>
</tr>

</table>

</form>
<script>
    $(document).ready(function(){

      $("#country_id").change(function(){
           countryid = $(this).val();
        //    alert(countryid);
              $.ajax({
                          url: "get-state.php", 
                          method:"GET",
                          data:{"count_id": countryid},
                          success: function(response){
                            $("#state_id").html(response);
                          },
                          error: function(msg){
                            console.log(msg);
                          }
                  

              });

      });





    });
</script>

</body>
</html>