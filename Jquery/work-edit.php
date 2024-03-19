<?php
include_once('config-work.php');
$id = $_GET['wid']??0;

if ($id) {
    $selQuery = "SELECT * FROM `works` WHERE id=$id";

    //echo $selQuery;

    $selWork = $con->query($selQuery);

    $work = $selWork->fetch_assoc();

    // print_r($work);
    // die;
    
} else {
    header("location: work-list.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <style>
        *{
            font-size:20px;
            font-weight:bold;
        }
        .main{
            width:38%;
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
            <form action="work-update.php" method="post" id="register">
            <h1 align=center>Project Management</h1>
            <input type="hidden" name="id" value="<?= $work['id'] ?>" />
            <table>
                <tr>
                    <td><label for="name">Project Name</label></td>
                    <td><input type="text" name="pname" id="pname" placeholder="project name" value="<?= $work['pname'] ?>" /></td>
                </tr>
                <tr>
                    <td>Assigned to</td>
                    <td>
                        <select name="assign" id="assign">
                            <option value="Er Merry Petision"<?= ($work['assign']=='Er Merry Petision')?'checked':'' ?> >Er Merry Petision</option>
                            <option value="Er Deepak Bhusan" <?= ($work['assign']=='Er Deepak Bhusan')?'checked':'' ?> >Er Deepak Bhusan</option>
                            <option value="Er Robert Watson" <?= ($work['assign']=='Er Robert Watson')?'checked':'' ?> >Er Robert Watson</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="start">Start Date</label></td>
                    <td><input type="date" name="start" id="start" value="<?= $work['start'] ?>" /></td>
                </tr>
                <tr>
                    <td><label for="end">End Date</label></td>
                    <td><input type="date" name="end" id="end" value="<?= $work['end'] ?>" /></td>
                </tr>
                <tr>
                    <td><label for="priority">Priority</label></td>
                    <th>
                        <input type="radio" name="priority" id="high" value="High" <?= ($work['priority']=='High')?'checked':'' ?> />&nbsp;High
                        <input type="radio" name="priority" id="avg" value="Average" <?= ($work['priority']=='Average')?'checked':'' ?> />&nbsp;Average
                        <input type="radio" name="priority" id="low" value="Low" <?= ($work['priority']=='Low')?'checked':'' ?> />&nbsp;Low
                    </th>
                </tr>
                <tr>
                    <td><label for="des">description</label></td>
                    <th><textarea name="description" id="des" cols="25" rows="3"><?= $work['description'] ?></textarea></th>
                </tr>
                <tr>
                    <th colspan="2">
                        <input type="submit" name="submit" value="Submit" id="submit">
                        <input type="reset" name="reset" value="Reset" id="reset">
                    </th>
                </tr>
            </table>
            </form>
        </div>
    </div>
</body>
</html>