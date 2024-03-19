<?php
require_once('config.php');

$selconQuery = "SELECT * FROM countries"; 
$countryData = $con->query($selconQuery);

echo "<h2>country List</h2>";
?>
<button><a href="country-form.php">Add country</a></button>
<?php
if($countryData->num_rows) {
    ?>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>status</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>Action</th>
        </tr>
    <?php
   
    while($country = $countryData->fetch_assoc()) {
        //print_r($country);
        
        ?>
        <tr>
            <td><?= $country['id'] ?></td>
            <td><?= $country['name'] ?></td>
            <td><?= ($country['status']==1)?'enable':'disable' ?></td>
            <td><?= $country['created_at']?></td>
            <td><?= $country['updated_at']?></td>
            
            <td>
            <a href="country-edit.php?id=<?=$country['id'] ?>">Edit</a> | 
            <a href="country-delete.php?id=<?=$country['id'] ?>">Delete</a>
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