<?php
require_once('config.php');

$selStuQuery = "SELECT * FROM students"; //order by create_at DESC
$studentData = $con->query($selStuQuery);
//echo "<pre>";
echo "<h2>Student List</h2>";
?>
<a href="student-form.php">Add Student</a>
<?php
if($studentData->num_rows) {
    ?>

    <table border="1" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>fee</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    <?php
   
    while($student = $studentData->fetch_assoc()) {
        //print_r($student);
        
        ?>
        <tr>
            <td><?= $student['id'] ?></td>
            <td><?= $student['name'] ?></td>
            <td><?= $student['email'] ?></td>
            <td><?= $student['phone'] ?></td>
            <td><?= $student['fee'] ?></td>
            <td><?= $student['address'] ?></td>
            <td>
            <a href="student-edit.php?id=<?=$student['id'] ?>">Edit</a> | 
            <a href="student-delete.php?id=<?=$student['id'] ?>">Delete</a>
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
// echo "<pre>";
// print_r($studentData);


?>