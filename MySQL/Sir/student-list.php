<?php
include_once('config.php');

$selQuery = "SELECT * FROM `students`";

$selStudent = $con->query($selQuery);
?>
<a href="student-add.php">+ Add Student</a>
<?php
if($selStudent->num_rows) {
    ?>
    <table border="1">
        <tr>
            <th colspan = "8">Name</th>
        </tr>
        <tr>
            <th>Sr. No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Father Name</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Fee</th>
            <th>Action</th>
        </tr>

    <?php
    $i = 1;
    while($student = $selStudent->fetch_assoc()) {
        ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $student['name'] ?></td>
            <td><?= $student['email'] ?></td>
            <td><?= $student['father_name'] ?></td>
            <td><?= $student['phone'] ?></td>
            <td><?= $student['age'] ?></td>
            <td><?= $student['fee'] ?></td>
            <td>
                <a href="">Edit</a> | 
                <a href="">Delete</a>
            </td>
        </tr>

        <?php
    }
    ?>
    </table>
    <?php
} else {
    echo "No record found...";
}




?>