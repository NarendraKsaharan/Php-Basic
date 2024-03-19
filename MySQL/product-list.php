<?php
include_once('configprod.php');
$selQuery = "SELECT * FROM `products`";

$selproduct = $con->query($selQuery);
?>
<a href="product-add.php">Add Product</a>

<?php include_once('message-prod.php'); ?>
<?php
if ($selproduct->num_rows) {
    ?>
    <table border="1" style = "border-collapse: collapse;" cellpadding = "8px" cellspacing = "0" width = "1200px">
        <tr>
            <th>Sr No.</th>
            <th>Product Name</th>
            <th>Product SKU</th>
            <th>MFG Date</th>
            <th>MRP</th>
            <th>Action</th>
        </tr>
    <?php
    $i = 1;
    while ($product = $selproduct->fetch_assoc()) {
        ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['sku'] ?></td>
            <td><?= $product['mfg'] ?></td>
            <td><?= $product['price'] ?></td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php
} else {
    echo "No records Found....";
}

?>