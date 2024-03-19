<?php
include_once('config-user.php');
include_once('auth.php');


?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <?php include_once("includes/head.php"); ?>
</head>

<body>
<?php include_once("includes/nav.php"); ?>
    <section class="home-section">
    <?php include_once("includes/header.php"); ?>

        <div class="home-content">
            <div class="main-top">
                <div class="top">
                    <div class="sidebar-button">
                        <span class="dashboard">Users List</span>
                    </div>
                    <div class="search-box">
                        <input type="text" placeholder="Filter">
                        <i class='bx bx-search'></i>
                    </div>
                    <div class="aas">
                        <a href="registration.php">+ Add New Users</a> 
                    </div>
                </div>
            </div>            
        </div>
        
    </section>
    <section>
    <div class="table">
        <div class="full">
            

<?php

$selQuery = "SELECT * FROM `users`";
$selUser = $con->query($selQuery);

if ($selUser->num_rows) {
?>
        <table>
            <tr>
                <th>Sr No.</th>
                <th>Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
<?php

    $i = 1;
    while ($user = $selUser->fetch_assoc()) {
        ?>
            <tr>
                <th><?= $i++ ?></th>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['password'] ?></td>
                <td>
                    <a href="user-edit.php">Edit</a> |
                    <a href="user-delete.php">Delete</a>
                </td>
            </tr>
        <?php
    }
    ?>
    </table>
    <?php

}



?>
            </div>
        </div>
    </section>
    <!-- <footer>
            <div class = "footer">
                <h3>Showing 1 to 10 of 57 entries</h3>
                <h3>Previous  &nbsp <span>1</span> &nbsp 2  &nbsp 3 &nbsp 4 &nbsp 5  &nbsp Next</h3>
            </div>
    </footer> -->

    

</body>

</html>