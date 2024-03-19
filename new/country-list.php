<?php
include_once('config.php');

$selQuery = "SELECT * FROM `countries`";
$selCount = $con->query($selQuery);

if ($selCount->num_rows) {
    ?>
    <table>
        <tr>
            <th>Sr No.</th>
            <th>Country Name</th>
            <th>Country Status</th>
            <th>Action</th>
        </tr>
    <?php
    
    $i = 1;
    while ($count = $selCount->fetch_assoc()) {
        ?>
        <tr>
            <th><?= $i++ ?></th>
            <td><?= $count['name'] ?></td>
            <td><?= $count['status'] ?></td>
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
}

?>