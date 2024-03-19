<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>
    <form action="employee-save.php" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name="gender"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="age"></td>
            </tr>
            <tr>
                <td>City</td>
                <td><input type="text" name="city"></td>
            </tr>
            <tr>
                <td><input type="reset" name="reset"></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>