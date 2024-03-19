<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add data</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    
</head>
<body>
    <form action="empy-save.php" method="post">
        <table border = 2 width = "100px" style="border-collapse: collapse;" id="table-data">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone</th>
                    <th>Position</th>
                    <td><input type="button" value="Add More" class="add-row"></td>
                </tr>
                <tr>
                    <td><input type="text" name="name[]" id="name"></td>
                    <td><input type="email" name="email[]" id="email"></td>
                    <td><input type="password" name="password[]" id="password"></td>
                    <td><input type="tel" name="phone[]" id="phone"></td>
                    <td><input type="text" name="position[]" id="position"></td>
                    <td><input type="button" value="Add More" class="add-row"></td>
                </tr>
        </table>
        <input type="submit" value ="save" id="submit">
    </form>
</body>
<script>
$(document).ready(function(){
    $('#table-data .add-row').click(function(){
        row = '<tr> <td><input type="text" name="name[]" id="name"></td><td><input type="email" name="email[]" id="email"></td><td><input type="password" name="password[]" id="password"></td><td><input type="tel" name="phone[]" id="phone"></td><td><input type="text" name="position[]" id="position"></td> <td><input type="button" value="X" class="remove"></td></tr>';
        $('#table-data').append(row);
    });
    $('#table-data').delegate('.remove', 'click', function(){
        (this).closest('tr').remove();
    });

});
    
</script>

</html>