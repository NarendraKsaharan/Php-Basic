


<?php
include_once('configshop.php');

$selQuery = "SELECT * FROM details JOIN delivery_addresses ON details.id = delivery_addresses.detail_id
            JOIN card_details ON details.id = card_details.detail_id";
         
// $selQuery = "SELECT * FROM  `details`";
$selshop = $con->query($selQuery);
?>

<a href="shop-add.php" style ="text-decoration: none;color: white;font-weight: bold;border: 1px solid gray;
background: darkgray;padding: 16px 24px;border-radius: 15px;margin-left: 47%;">ADD DETAILS</a>


<?php include_once('message-shop.php') ?>

<?php


if ($selshop->num_rows) {
    ?>
        <table border="2" style="border-collapse:collapse;margin-top:20px;" cellpadding="10" align=center>
            <tr>
                <th>S.r No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Post Code</th>
                <th>Country</th>
                <th>Card Type</th>
                <th>Card Number</th>
                <th>Security Code</th>
                <th>Name On Card</th>
                <th>Action</th>
            </tr>
    
    <?php
    $i = 1;
    while ($shop = $selshop->fetch_assoc()) {
        
        ?>
        <tr>
            <th><?= $i++ ?></th>
            <td><?= $shop['name'] ?></td>
            <td><?= $shop['email'] ?></td>
            <td><?= $shop['phone'] ?></td>
            <td><?= $shop['address'] ?></td>
            <td><?= $shop['post_code'] ?></td>
            <td><?= $shop['country'] ?></td>
            <td><?= $shop['card_type'] ?></td>
            <td><?= $shop['card_number'] ?></td>
            <td><?= $shop['security_code'] ?></td>
            <td><?= $shop['name_on_card'] ?></td>
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
    echo "Data Not found";
}


?>
