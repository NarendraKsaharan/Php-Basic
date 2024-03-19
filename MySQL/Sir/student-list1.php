<?php
include_once('mysql-1-php.php');

$selQuery = "SELECT * FROM `students-2` order by id DESC";

$selStudent = $manish->query($selQuery);
?>
<a href= "add-student.php">+ Add Student</a>

<?php include_once('messages.php');?>
<?php
if($selStudent->num_rows) {
    ?>
    <table border="1" cellspacing = "0" cellpadding = "8" width = "1200px" bgcolor = "#cccccc" style = "border: 1px solid red;">
        <tr bgcolor = "red">
            <th>Sr. No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>age</th>
            <th>class</th>
            <th>pincod</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>Action</th>
        </tr>

    <?php
    $i = $selStudent->num_rows;
    while($student = $selStudent->fetch_assoc()) {
        ?>
        <tr bgcolor = "yellow">
            <td><?= $i-- ?></td>
            <td><?= $student['name'] ?></td>
            <td><?= $student['email'] ?></td>
            <td><?= $student['phone'] ?></td>
            <td><?= $student['age'] ?></td>
            <td><?= $student['class'] ?></td>
            <td><?= $student['pincod'] ?></td>
            <td><?= $student['created_at'] ?></td>
            <td><?= $student['updated_at'] ?></td>
            
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
