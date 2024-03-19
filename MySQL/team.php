<?php
include_once('configshop.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="team-save.php" method="post" id="register">
    <h2>Step 1: Your Details</h2>
    <?php
        if(isset($_SESSION['success'])) {
            echo $_SESSION['success'];
            unset($_SESSION['success']);
        }
        if(isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }

    ?>
    <div class="border">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="First and Last Name" size="28" >
    </div>
    <div class="border">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="exp@domain.com" size="28" >
    </div>
    <div class="border">
        <label for="phone">Phone</label>
        <input type="tel" name="phone" placeholder="Eg.+447500000" size="28" >
    </div>
    <div class="submit">
        <input type="submit" name="submit" id="submit" value="Save">
    </div> 
</form>
</body>
</html>