<?php
include_once('configmrk.php');
$selQuery = "SELECT * FROM `marks`";
$selMark = $con->Query($selQuery);

// echo "<pre>";
// print_r($selMark);
?>
<a href="mark-add.php">Add Student Marks Detail</a>
<?php include_once('message-mrk.php'); ?>
<?php
if ($selMark->num_rows) {
    ?>
    <table border = "1" style = "border-collapse: collapse;" width = "80%" height = "80%">
        <tr>
            <th colspan = "12" bgcolor = "lightgreen">STUDENTS MARKSHEET</th>
        </tr>
        <tr bgcolor = "skyblue">
            <th>Sr No.</th>
            <th>Name</th>
            <th>Hindi</th>
            <th>English</th>
            <th>Chemistry</th>
            <th>Physics</th>
            <th>Maths</th>
            <th>Total Marks</th>
            <th>OBT Marks</th>
            <th>Percentage</th>
            <th>Position</th>
            <th>Action</th>
        </tr>
    <?php
    $i = 1;
    while ($mark = $selMark->fetch_assoc()) {
       ?>
        <tr align = "center">
            <th><?= $i++ ?></th>
            <td><?= $mark['name'] ?></td>
            <td><?= $mark['hindi'] ?></td>
            <td><?= $mark['english'] ?></td>
            <td><?= $mark['chemistry'] ?></td>
            <td><?= $mark['physics'] ?></td>
            <td><?= $mark['maths'] ?></td>
            <td><?= $mark['total'] ?></td>
            <td><?= $mark['obt'] ?></td>
            <td><?= $mark['per'] ?></td>
            <td><?= $mark['grade'] ?></td>
            
            <td>
                <a href="">Edit</a> |
                <a href="">Delete</a>
            </td>
        </tr>
       <?php
    }
    ?>
    <table>
    <?php
} else {
    echo "Data not Found....";
}


?>