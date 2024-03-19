<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Word data</title>
    <style>
        *{
            font-size:20px;
            font-weight:bold;
        }
        .main{
            width:37%;
            margin:auto;
        }
        .register{
            width:100%;
            border:1px solid red;
            border-radius:10px;
            padding:15px;
            background:skyblue;
            margin-top:20%;
        }
        input, select{
            padding:8px;
            margin-top:5px;
        }
        #reset, #submit{
            margin-left:20%;
        }
        h1{
            font-size:30px;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="register">
            <form action="work-save.php" method="post" id="register">
            <h1 align=center>Project Management</h1>
            <table>
                <tr>
                    <td><label for="name">Project Name</label></td>
                    <td><input type="text" name="pname" id="pname" placeholder="project name"></td>
                </tr>
                <tr>
                    <td>Assigned to</td>
                    <td>
                        <select name="assign" id="assign">
                            <option value="Er Merry Petision">Er Merry Petision</option>
                            <option value="Er Deepak Bhusan">Er Deepak Bhusan</option>
                            <option value="Er Robert Watson">Er Robert Watson</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="start">Start Date</label></td>
                    <td><input type="date" name="start" id="start"></td>
                </tr>
                <tr>
                    <td><label for="end">End Date</label></td>
                    <td><input type="date" name="end" id="end"></td>
                </tr>
                <tr>
                    <td><label for="priority">Priority</label></td>
                    <th>
                        <input type="radio" name="priority" id="high" value="High">&nbsp;High
                        <input type="radio" name="priority" id="avg" value="Average">&nbsp;Average
                        <input type="radio" name="priority" id="low" value="Low">&nbsp;Low
                    </th>
                </tr>
                <tr>
                    <td><label for="des">Description</label></td>
                    <th><textarea name="description" id="des" cols="22" rows="5"></textarea></th>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Submit" id="submit">
                        <input type="reset" name="reset" value="Reset" id="reset">
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</body>
</html>