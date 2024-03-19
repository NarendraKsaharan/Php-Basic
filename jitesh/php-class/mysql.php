<?php

require_once('mysqli-con.php');


$student= "SELECT * FROM students";
$studentdata = $con->query($student);

if($studentdata->num_rows) {
  ?>
   <table border="1" cellspacing="0">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>gender</th>
        <th>fee</th>
        <th>address</th>
    </tr>
<?php
while($student1 = $studentdata->fetch_assoc()){
    ?>
    <tr>
        <td><?=$student1['id']  ?></td>
        <td><?=$student1[ 'name'] ?></td>
        <td><?= $student1['email'] ?></td>
        <td><?= $student1['phone'] ?></td>
        <td><?= $student1['gender'] ?></td>
        <td><?= $student1['fee'] ?></td>
        <td><?= $student1['address'] ?></td>
    </tr>
    <?php
}
?>
</table>
<?php

}else{
    echo "no record found...";
}
// echo "<pre>";
// print_r ($studentdata);




$stusch = "SELECT * from students1";
$studentdata2 = $con->query($stusch);

if($studentdata2->num_rows){
     ?>
     <table border="1" cellspacing="0">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>roll_no</td>
            <td>phone</td>
            <td>gender</td>
        </tr>
      <?php
      while($student2 = $studentdata2->fetch_assoc()){
        ?>
        <tr>
         <td><?=$student2['id']?></td>
         <td><?=$student2['name']?></td>
         <td><?=$student2['email']?></td>
         <td><?=$student2['roll_no']?></td>
         <td><?=$student2['phone']?></td>
         <td><?=$student2['gender']?></td>
        </tr>
        <?php
      }
   ?>
   </table>
   <?php
}
  $collage1 = "SELECT * from collage";
  $collage2 = $con->query($collage1);

  if($collage2 -> num_rows){
    ?>
    <table border="1"  cellspacing="0">
        <tr>
             <td>id</td>
             <td>name</td>
             <td>email</td>
             <td>phone</td>
             <td>gender</td>
             <td>father's-name</td>
             <td>fee</td>
             <td>address</td>
        </tr>
     <?php
     while($collage3 = $collage2->fetch_assoc()){
        ?>
        <tr>
               <td><?=$collage3['id']?></td>
               <td><?=$collage3['name']?></td>
               <td><?=$collage3['email']?></td>
               <td><?=$collage3['phone']?></td>
               <td><?=$collage3['gender']?></td>
               <td><?=$collage3['father_name']?></td>
               <td><?=$collage3['fee']?></td>
               <td><?=$collage3['address']?></td>
        </tr>
        <?php

     }
     ?>
     <table>
        <?php

  }









?>