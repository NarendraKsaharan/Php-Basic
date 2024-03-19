<?php
include_once('configemp.php');

$selQuery = "SELECT * FROM `employees`";

$selEmployees = $con->query($selQuery);
?>
<a href = "employee-add.php">+ Add Employee</a>
<?php include_once('messageemp.php');?>
<?php
if ($selEmployees->num_rows) {
    ?>
    <table border="1" style = "border-collapse: collapse;">
        <tr>
            <th>Sr No.</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>City</th>
            <th>Action</th>
        </tr>
        <?php
        $i = 1;
    while ($employee = $selEmployees->fetch_assoc()) {
        ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $employee['name'] ?></td>
            <td><?= $employee['gender'] ?></td>
            <td><?= $employee['age'] ?></td>
            <td><?= $employee['city'] ?></td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php

} else {
    echo "NO record found....";
}



?>