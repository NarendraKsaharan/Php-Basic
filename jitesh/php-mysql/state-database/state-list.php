<?php
require_once('config.php');

$selStuQuery="SELECT s.*, c.name as country_name FROM `states` as s, `countries` as c WHERE c.id =s.country_id"; 
$stateData = $con->query($selStuQuery);

echo "<h2>state List</h2>";
?>
<button><a href="state-form.php">Add state</a></button>
<?php
if($stateData->num_rows) {
    ?>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Country_id</th>
            <th>Name</th>
            <th>status</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Action</th>
        </tr>
    <?php
   
    while($state = $stateData->fetch_assoc()) {
        //print_r($state);
        
        ?>
        <tr>
            <td><?= $state['id'] ?></td>
            <td><?= $state['country_name'] ?></td>
            <td><?= $state['name'] ?></td>
            <td><?= ($state['status']==1)?'enable':'disable' ?></td>
            <td><?= $state['created_at'] ?></td>
            <td><?= $state['updated_at'] ?></td>
            
            <td>
            <a href="state-edit.php?id=<?=$state['id'] ?>">Edit</a> | 
            <a href="state-delete.php?id=<?=$state['id'] ?>">Delete</a>
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