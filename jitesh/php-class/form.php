<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(empty($_POST['name'])) {
    $nameError = "Name is required*";
} else {
    $nameVal = $_POST['name'];
}
  if(empty($_POST['phone'])){
    $phoneerror = "phone numbar is required";
  }else{
    $phoneval = $_POST['phone'];
  }
    if(empty($_POST['email'])){
      $emailerror = "email is required";
    }else{
      $emailval = $_POST['email'];
    }
    if(empty($_POST['password'])){
      $passworderror = "password is required";
    }else{
      $passwordval = $_POST['password'];
    }
    if(empty($_POST['dob'])){
      $doberror = "dob is required";
    } else{
      $dobval = $_POST['dob'];
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .error{
        color: red;
      }
     
    </style>
</head>
<body>
    <form action="" method="post" > 

        <div ><label for="name">name : </label>
     <input type="text" name="name" id="name"  value="<?= $nameVal??NULL ?>" >
     <span class="error"><?= $nameError??NULL ?></span>
    </div><br><br>

     <div><label for="phone">Phone : </label>
       <input type="tel" name="phone" id="phone" value="<?= $phoneval??null ?>">
       <span class="error"><?= $phoneerror??null ?></span>  
    </div><br><br>

        <div> <label for="email">Email : </label>
          <input type="email" name="email"id="email" value="<?= $emailval??null ?>">
          <span class="error"><?= $emailerror??null ?></span>
        </div><br> <br>

        <div><label for="password">Password : </label>
          <input type="password" name="password" id="password" value="<?= $passwordval??null ?>">
          <span class="error"><?= $passworderror??null ?></span>
          </div><br><br>

          <div><label for="date">Date Of Birth : </label>
     <input type="date" name="dob" id="date" value="<?= $dobval??null ?>">
     <span class="error"><?= $doberror??null ?></span>
     </div><br><br>

     <div> <label for="sub">Subject : </label>&nbsp&nbsp
       <input type="checkbox" name="sub" id="english"  value="eng" >
       <label for="english">English</label>&nbsp
       <input type="checkbox" name="sub" id="history" value="his">
       <label for="history">History  </label>&nbsp
       <input type="checkbox" name="sub" id="hindi" value="hindi">
       <label for="hindi">hindi</label>
       </div><br><br>

       <div><label for="gender">Gender : </label>
       <input type="radio" name="gender" id="gender" value="male" >
       <label for="gender">Male</label>
       <input type="radio" name="gender" id="gender" value="female" >
       <label for="gender">Female</label>
       </div><br><br>

       <div><label for="district">District : </label>&nbsp
       <select name="district" id="district">
       <option value="churu">churu</option>
       <option value="ratangarh">ratangarh</option>
       <option value="sardarshahar" selected>sardarshahar </option>
       <option value="taranagar">taranagar</option>
       <option value="sujangarh">sujangarh</option>
       <option value="rajgarh">rajgarh</option>
       </select required>
       </div><br><br>
       
       <input type="reset" name="reset" value="Reset Form">
       <button type="submit">Submit</button >



    </form>
    
</body>
</html>