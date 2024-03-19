<?php

include_once("config[1].php");

$selectquery = "select * from country";
$countrydata = $con->query($selectquery);

$squery = "select * from state";
$statetdata = $con->query($squery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add city</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>


</head>
<body>
           
            <h1>add city</h1>
      
   <form action="city-save.php" method="post" enctype="multipart/form-data" id="city-form">
      <table>

           <tr>

                 <td>Country</td>
                 <td>
                    <select name="country_id">

                        <option value="">--countries--</option>
                        <?php

                          while($data = mysqli_fetch_assoc($countrydata)){
                        ?>
                            <option value="<?=$data["id"]?>" name="country_id"><?= $data["name"]?></option>
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

                          while($sdata = mysqli_fetch_assoc($statetdata)){
                        ?>
                            <option value="<?=$sdata["id"]?>" name="state_id"><?= $sdata["name"]?></option>
                            <?php
                          }
                            ?>
                    </select>

                 </td>

           </tr>


           <tr>

                <td>Name</td>
                <td>

                   <input type="text" name="name" id="name">

                </td>

           </tr>

           <tr>

               <td>Status</td>
               <td>
 
                 <select name="status" id="status">

                    <option value="">--select option--</option>
                    <option value="1">enable</option>
                    <option value="2">disable</option>

                 </select>

                </td>

           </tr>

           <tr>

              <td>

                   <input type="Reset">

              </td>

              <td>

                  <input type="Submit">

              </td>

           </tr>

      </table>
   </form>

   <!-- <script>

      $(document).ready(function(){
          $("#city-form").validate({

            rules: {
              
                "country_id": "required",
                "state_id": "required",
                "name": "required",
                "status": "required"

            },

            messages: {


               "country_id": "Country Id is a required field",
               "state_id": "State Id is a required field",
               "name": "Name is a required field",
               "status": "Status is a required field",

            }

          });

      });


   </script> -->


      <style>
       
        label.error{

          color : red;
          font-size : 12xp;
        }

      </style>



</body>
</html>