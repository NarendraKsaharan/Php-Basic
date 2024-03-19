<?php
include_once('configfor.php');

$selQuery = "SELECT * FROM `forms`";
$selforms = $con->query($selQuery);

?>
<a href="form-add.php">Add Detail</a>
<?php include_once('message-for.php');?>
<?php
if ($selforms->num_rows) {
    ?>
        <table border="1" style = "border-collapse: collapse;" width="100%">
        <tr>
            <th>Sr No.</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Nick Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Address</th>
            <th width="80px">Action</th>
        </tr>
    <?php
    $i = 1;
    while ($form = $selforms->fetch_assoc()) {
        
        ?>
        <tr>
            <th><?= $i++ ?></th>
            <td><?= $form['fname'] ?></td>
            <td><?= $form['lname'] ?></td>
            <td><?= $form['nname'] ?></td>
            <td><?= $form['email'] ?></td>
            <td><?= $form['password'] ?></td>
            <td><?= $form['dob'] ?></td>
            <td><?= $form['gender'] ?></td>
            <td><?= $form['mobile'] ?></td>
            <td><?= $form['address'] ?></td>
            <td>
                <a href="update.php">Edit</a> |
                <a href="form-delete.php">Delete</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php
} else {
    echo "आल ठाकुर तो गीयो 🧟🧟......";
}

?>