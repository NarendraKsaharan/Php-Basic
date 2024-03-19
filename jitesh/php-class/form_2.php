<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
        background-color: lightgreen;
    }
    input{
        padding: 10px;
    }
    .table{
        font-size:20px;
    }
    .select{
        padding: 10px;
    }
    .error{
        color: red;
    }
   
    </style>
</head>
<body>
    <form action="new_form.php" method="post">
<table class="table">
<tr>
    <td><label for="name">Name : </label></td>
    <td><input type="text" name="name" id="name" value="<?= $_SESSION['nameval']??null ?>" > 
    <span class="error"><?= $_SESSION['nameerror']??null?></span>
</td>
</tr>
<tr>
    <td><label for="father-name">Father's name : </label></td>
    <td><input type="text" name="father-name" id="father-name" value="<?= $_SESSION['father-nameval']??null ?>">
<span class="error"> <?= $_SESSION['father-nameerror']??null ?></span>
</td>
</tr>
<tr>
    <td><label for="roll-number">Roll namur : </label></td>
    <td><input type="number" name="roll-number" id="roll-number" value="<?= $_SESSION['roll-numberval']??null ?>">
  <span class="error"> <?= $_SESSION['roll-numbererror']??null ?></span>
 </td>
</tr>
<tr>
    <td><label for="email">Email : </label></td>
    <td><input type="email" name="email" id="email" value="<?= $_SESSION['emailval']??null ?>">
<span class="error"><?= $_SESSION['emailerror']??null ?>
</span></td>
</tr>
<tr>
    <td><label for="password">Password : </label></td>
   <td> <input type="password" name="password" id="password" value="<?= $_SESSION['passwordval']??null ?>">
    <span class="error"> <?= $_SESSION['passworderror']??null ?></span>
</td>
</tr>
<tr>
    <td><label for="phone">Phone : </label></td>
    <td><input type="tel" name="phone" id="phone" value="<?= $_SESSION['phoneval']??null ?>">
  <span class="error"> <?= $_SESSION['phoneerror']??null ?>
</span></td>
</tr>
<tr>
    <td><label for="subject">Subject : </label></td>
    <td>
        <input type="checkbox" name="ba" id="ba"><label for="ba">BA</label>
        <input type="checkbox" name="bsc" id="bsc"><label for="bsc">BSC</label>
        <input type="checkbox" name="bca" id="bca"><label for="bca">BCA</label>
        <input type="checkbox" name="bcom" id="bcom"><label for="bcom">BCOM</label>
    </td>
</tr>
<tr>
    <td><label for="gender">Gender : </label></td>
    <td>
        <input type="radio" name="gender" id="male"><label for="male">Male</label><br>
        <input type="radio" name="gender" id="female"><label for="female">Female</label>
    </td>
</tr>
<tr>
    <td><label for="address">Address</label></td>
    <td>
        <select class="select">
        <option value="churu">churu</option>
       <option value="ratangarh">ratangarh</option>
       <option value="sardarshahar" selected>sardarshahar </option>
       <option value="taranagar">taranagar</option>
       <option value="sujangarh">sujangarh</option>
       <option value="rajgarh">rajgarh</option>
        </select>
    </td>
</tr>
<tr>
    <td> <input type="reset" name="reset" value="Reset Form"></td>
    <td><input type="submit"  value="submit"></td>
</tr>
</table>
   </form>
<?php
unset($_SESSION['nameerror']);
unset($_SESSION['father-nameerror']);
unset($_SESSION['roll-numbererror']);
unset($_SESSION['emailerror']);
unset($_SESSION['passworderror']);
unset($_SESSION['phoneerror']);

unset($_SESSION['nameval']);
unset($_SESSION['father-nameval']);
unset($_SESSION['roll-numberval']);
unset($_SESSION['emailval']);
unset($_SESSION['passwordval']);
unset($_SESSION['phoneval']);

?>
</body>
</html>