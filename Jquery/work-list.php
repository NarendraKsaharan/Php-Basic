<?php
include_once('config-work.php');

$selQuery = "SELECT * FROM `works`";
// echo $selQuery;
$selWork = $con->query($selQuery);

// echo "<pre>";
// print_r($selWork);

?>
<a href="work-add.php" style="text-decoration:none;color:blue;border:1px solid gray;padding:8px 16px;border-radius:5px;margin:40%;font-weight:bold;background:lightgray;font-size:30px;">Add More Project</a>
<?php
include_once('message-work.php');
?>
<?php

if ($selWork->num_rows) {
?>
    <table border="2" style="border-collapse:collapse;margin-top:30px;" cellpadding="10" width="100%">
        <tr>
            <th>Sr No.</th>
            <th>Project Name</th>
            <th>Assigned to</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Priority</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
<?php

    $i = 1;
    while ($work = $selWork->fetch_assoc()) {

        // echo "<pre>";
        // print_r($work);
        // die;
?>
        <tr>
            <th><?= $i++ ?></th>
            <td><?= $work['pname'] ?></td>
            <td><?= $work['assign'] ?></td>
            <td><?= $work['start'] ?></td>
            <td><?= $work['end'] ?></td>
            <td><?= $work['priority'] ?></td>
            <td><?= $work['description'] ?></td>
            <td>
                <a href="work-edit.php?wid=<?= $work['id'] ?>">Edit</a> |
                <a href="work-delete.php?wid=<?= $work['id'] ?>">Delete</a>
            </td>
        </tr>
<?php

    }
    ?>
    </table>
    <?php
    
} else {
    echo "Data Not Found..";
}


?>