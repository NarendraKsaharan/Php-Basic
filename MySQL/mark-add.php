<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add markes</title>
</head>
<body>
    <form action="mark-save.php" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Hindi</td>
                <td><input type="number" name="hindi"></td>
            </tr>
            <tr>
                <td>English</td>
                <td><input type="number" name="english"></td>
            </tr>
            <tr>
                <td>Chemistry</td>
                <td><input type="number" name="chemistry"></td>
            </tr>
            <tr>
                <td>Physics</td>
                <td><input type="number" name="physics"></td>
            </tr>
            <tr>
                <td>Maths</td>
                <td><input type="number" name="maths"></td>
            </tr>
            <tr>
                <td>Total</td>
                <td><input type="number" name="total"></td>
            </tr>
            <tr>
                <td>OBT</td>
                <td><input type="number" name="obt"></td>
            </tr>
            <tr>
                <td>Percentage</td>
                <td><input type="text" name="per"></td>
            </tr>
            <tr>
                <td>Grade</td>
                <td><input type="number" name="grade"></td>
            </tr>
            <tr>
                <td><input type="reset" name="reset"></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>