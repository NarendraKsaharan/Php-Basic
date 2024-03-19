<?php
include_once('configteam.php');

$selQuery = "SELECT * FROM `teams`";

$selTeam = $con->query($selQuery);

?>
<a href="jquery-table.php">Add Detail</a>
<?php
include_once('message-team.php');

if ($selTeam->num_rows) {
    ?>
    <table border="1" style="border-collapse:collapse" width="100%" cellpadding="7">
        <tr>
            <th>Sr No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    <?php
$i = 1;    
while ($team = $selTeam->fetch_assoc()) {
   ?>
        <tr>
            <th><?= $i++ ?></th>
            <td align="center"><?= $team['name'] ?></td>
            <td align="center"><?= $team['email'] ?></td>
            <td align="center"><?= $team['phone'] ?></td>
            <td align="center">
                <a href="">Edit</a>&nbsp;&nbsp;|&nbsp;
                <a href="">Delete</a>
            </td>

        </tr>
   <?php

}
?>
</table>
<?php
} else {
    echo "Data Not Found";
}


?>