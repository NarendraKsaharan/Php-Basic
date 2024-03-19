<?php
include_once('config-empy.php');

$selQuery = "SELECT * FROM `employees`";
$selEmpy = $con->query($selQuery);

// echo "<pre>";
// print_r($selEmpy);

?>
<a href="empy-table.php">Add Data</a>
<?php
include_once('message-empy.php');
?>
<?php
if ($selEmpy->num_rows) {
    ?>
    <table border = 1 style="border-collapse:collapse" width= 1000px>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Phone</th>
        <th>Position</th>
        <th>Action</th>
    </tr>
    <?php
    
    $i = 1;
    while ($emp = $selEmpy->fetch_assoc()) {
        ?>
        <tr>
            <th><?= $i++ ?></th>
            <td><?= $emp['name'] ?></td>
            <td><?= $emp['email'] ?></td>
            <td><?= $emp['password'] ?></td>
            <td><?= $emp['phone'] ?></td>
            <td><?= $emp['position'] ?></td>
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
    echo "Data not found";
}



?>