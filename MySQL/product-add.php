<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <form action="product-save.php" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Sku</td>
                <td><input type="number" name="sku"></td>
            </tr>
            <tr>
                <td>MFG</td>
                <td><input type="text" name="mfg"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="number" name="price"></td>
            </tr>
            <tr>
                <td><input type="reset" name="reset"></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>