<?php
include_once("config.php");

$countryid = $_GET['count_id'];

$selectstate = "select * from states where country_id = $countryid";
 $_state = $con->query($selectstate);

 echo '<option value="" >--- Select State ---</option> ';
  
   while($state = $_state->fetch_assoc()){
    ?><option value="<?= $state['id']?>"><?= $state['name']?></option><?php
   
   }


?>