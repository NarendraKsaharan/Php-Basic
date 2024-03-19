<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <form action="student-save.php" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" /></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" /></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone" /></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="number" name="age" /></td>
        </tr>
        <tr>
            <td>Class</td>
            <td><input type="text" name="class" /></td>
        </tr>
        <tr>
            <td>PinCode</td>
            <td><input type="number" name="pincod" /></td>
        </tr>
        <tr>
            <td><input type="reset" name="rest" /></td>
            <td><input type="submit" name="submit" value="Submit Now" /></td>
        </tr>
    </table>
    </form>
</body>
</html>