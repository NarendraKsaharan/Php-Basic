<?php
include_once('message-team.php');

if(isset($_POST['submit'])) {
    // save data of first row to database
    saveTeamData($_POST['name'][0], $_POST['email'][0], $_POST['phone'][0]);
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>

<form action="team-save.php" method="post">
<table border="1" width="500" id="team-table">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th><input type="button" class="add-more" value="+ Add More"></th>
    </tr>
    <tr>
        <th><input type="text" name="name[]" placeholder="Name"></th>
        <th><input type="email" name="email[]" placeholder="Email"></th>
        <th><input type="tel" name="phone[]" placeholder="Phone"></th>
        <th><input type="button" class="add-more" value="+ Add More"></th></th>
    </tr>
</table>
<input type="submit" value="Save">
</form>




<style>
    .acc-section {
        display:none;
    }

    .divsec {
        background: green;
    }
</style>
<script>
$(document).ready(function(){

    $('#team-table .add-more').click(function(){
        $rowHtml = '<tr> <th><input type="text" name="name[]" placeholder="Name"></th> <th><input type="email" name="email[]" placeholder="Email"></th> <th><input type="tel" name="phone[]" placeholder="Phone"></th> <th><input type="button" class="remove" value="X"></th> </tr>';
        $('#team-table').append($rowHtml);
    });

    $('#team-table').delegate('.remove', 'click', function(){
        $(this).closest('tr').remove();
    });
    
});
</script>


</body>
</html>