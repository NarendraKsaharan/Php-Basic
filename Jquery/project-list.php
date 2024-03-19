<?php
include_once('config-pro.php');

$selQuery = "SELECT * FROM `projects`";

$selProject = $con->query($selQuery);

?>
<a href="project-add.php" style="text-decoration:none;color:blue;border:1px solid gray;padding:8px 16px;border-radius:5px;margin:40%;font-weight:bold;background:lightgray;font-size:30px;">Add More</a>
<?php
include_once('message-pro.php');
?>

<?php
if ($selProject->num_rows) { 
?>
<table border="1" style="border-collapse:collapse;margin-top:30px;" cellpadding="10" width="100%">
<tr>
    <th>Sr No.</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Date OF Birth</th>
    <th>Address</th>
    <th>Action</th>
</tr>
<?php

 $i = 1;   
while ($project = $selProject->fetch_assoc()) {
    ?>
    <tr>
        <th><?= $i++ ?></th>
        <td><?= $project['fname'] ?></td>
        <td><?= $project['lname'] ?></td>
        <td><?= $project['gender'] ?></td>
        <td><?= $project['email'] ?></td>
        <td><?= $project['dob'] ?></td>
        <td><?= $project['address'] ?></td>
        <td>
            <a href="project-edit.php?pid=<?= $project['id'] ?>">Edit</a> |
            <a href="project-delete.php?pid=<?= $project['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php
    

}


} else {
    echo "No data found";
}



?>