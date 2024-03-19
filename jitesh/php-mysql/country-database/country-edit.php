<?php

require_once("config.php");

$id = $_GET['id']??0;
if($id) {

    $selquery = "SELECT * FROM countries WHERE id=$id ";
    $countrydata = $con ->query($selquery) ;
    $countryss = $countrydata->fetch_assoc();
}
$selStuQuery = "SELECT * FROM states where country_id=$id"; 
$stateData = $con->query($selStuQuery);


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
    <h3>Edit country</h3>
   <form action="country-update.php" method="POST" id="formid">
    <input type="hidden" name="id" value="<?=$countryss['id']?>">
<table >
<tr>
    <td><label for="name">Name</label></td>
<td><input type="text" name="name" id="name" value="<?= $countryss['name'] ?>"></td>
</tr>
<tr>
    <td><label for="status">Ststus</label></td>
    <td><select name="status" id="status">
        <option value="1" <?=($countryss['status']==1)?"selected":""?>>Enable</option>
        <option value="2" <?=($countryss['status']==2)?"selected":""?>>Disable</option>
    </select></td>
</tr>
<table id="state_table">
<?php
if($stateData->num_rows) {
    ?> 
       <tr>
            <td>State Name</td>
            <td>Status</td>
            
        </tr>
        <?php
        while($statess = $stateData->fetch_assoc()) {
            ?>
            <tr>
            <td><input type="hidden" name="state_id[]" value="<?=$statess['id']?>" >
            <input type="text" name="state_name[]" value="<?= $statess['name']?>" ></td>
            <td>
                <select name="state_status[]">
                    <option value="1" <?=($statess['status']==1)?"selected":""?>>Enable</option>
                    <option value="2" <?=($statess['status']==2)?"selected":""?>>Disable</option>
                </select>
            </td>
            <td><input type="button" class="remove" value="X" ></td>
            
</td>   
            </tr>
<?php
        }
    }
    ?>
    </table>
<tr>
    <td><input type="reset" value="reset"></td>
    <td ><button type="button" id="add_more">  Add + </button></td>
    <td><input type="submit" value="update"></td>
</tr>
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





