<?php
require_once("config.php");

$selcity = "SELECT ci.*,c.name as country_name,s.name as state_name FROM `cities`as ci INNER JOIN`states`as s ON s.id=ci.state_id INNER JOIN `countries`as c ON c.id = ci.country_id";
$citydata = $con->query($selcity);

echo "<h2>city_list</h2>";
?>
<button><a href="city-form.php">add new city</a></button>
<?php
if($citydata->num_rows){
?>
<table border="1" cellspacing="0" cellpadding="10">
    <tr>
        <th>id</th>
        <th>country_id</th>
        <th>state_id</th>
        <th>name</th>
        <th>status</th>
        <th>created_at</th>
        <th>updated_at</th>
        <th>Action</th>
    </tr>

    <?php
    while($city = $citydata->fetch_assoc()){
?>
        <tr>
            <td><?=$city['id']?></td>
            <td><?=$city['country_id']?></td>
            <td><?=$city['state_id']?></td>
            <td><?=$city['name']?></td>
            <td><?=($city['status']==1)?'enable':'disable'?></td>
            <td><?=$city['created_at']?></td>
            <td><?=$city['updated_at']?></td>
        
        
            <td>
                <a href="city-edit.php?id=<?=$city['id']?>">Edit</a> |
                <a href="city-delete.php?id=<?=$city['id'] ?>">Delete</a>
            </td>
        </tr>
<?php
    }
    ?>
</table>

<?php

}

?>