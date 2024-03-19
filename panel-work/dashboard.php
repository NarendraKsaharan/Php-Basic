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
                        <span class="dashboard">Welcome to Dashboard</span>
                    </div>
                    <div class="search-box">
                        <input type="text" placeholder="Filter">
                        <i class='bx bx-search'></i>
                    </div>
                    <div class="aas">
                        <a href="">+ Add New Users</a> 
                    </div>
                </div>
            </div>
            <!-- <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Recent Sales</div>
                    <div class="sales-details">
                        <ul class="details">
                            <li class="topic">Date</li>
                            <li><a href="#">02 Jan 2021</a></li>
                            <li><a href="#">02 Jan 2021</a></li>
                            <li><a href="#">02 Jan 2021</a></li>
                            <li><a href="#">02 Jan 2021</a></li>
                            <li><a href="#">02 Jan 2021</a></li>
                            <li><a href="#">02 Jan 2021</a></li>
                            <li><a href="#">02 Jan 2021</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic">Customer</li>
                            <li><a href="#">Alex Doe</a></li>
                            <li><a href="#">David Mart</a></li>
                            <li><a href="#">Roe Parter</a></li>
                            <li><a href="#">Diana Penty</a></li>
                            <li><a href="#">Martin Paw</a></li>
                            <li><a href="#">Doe Alex</a></li>
                            <li><a href="#">Aiana Lexa</a></li>
                            <li><a href="#">Rexel Mags</a></li>
                            <li><a href="#">Tiana Loths</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic">Sales</li>
                            <li><a href="#">Delivered</a></li>
                            <li><a href="#">Pending</a></li>
                            <li><a href="#">Returned</a></li>
                            <li><a href="#">Delivered</a></li>
                            <li><a href="#">Pending</a></li>
                            <li><a href="#">Returned</a></li>
                            <li><a href="#">Delivered</a></li>
                            <li><a href="#">Pending</a></li>
                            <li><a href="#">Delivered</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic">Total</li>
                            <li><a href="#">$204.98</a></li>
                            <li><a href="#">$24.55</a></li>
                            <li><a href="#">$25.88</a></li>
                            <li><a href="#">$170.66</a></li>
                            <li><a href="#">$56.56</a></li>
                            <li><a href="#">$44.95</a></li>
                            <li><a href="#">$67.33</a></li>
                            <li><a href="#">$23.53</a></li>
                            <li><a href="#">$46.52</a></li>
                        </ul>
                    </div>
                    <div class="button">
                        <a href="#">See All</a>
                    </div>
                </div>
                
            </div> -->
            
        </div>
        
    </section>
    <section>
    <div class="table">
        <div class="full">
            <table>
                    <tr style="background:lightcyan;">
                        <th>ID No</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Visit Date</th>
                        <th>Visit Time</th>
                        <th>Admin</th>
                        <th>Work</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>#123</td>
                        <td>Demo</td>
                        <td>8989898989</td>
                        <td>14/03/2023</td>
                        <td>12:00PM</td>
                        <td>Admin</td>
                        <td>Meet</td>
                        <td>
                            <a href="">Edit</a> |
                            <a href="">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#123</td>
                        <td>Demo</td>
                        <td>8989898989</td>
                        <td>14/03/2023</td>
                        <td>12:00PM</td>
                        <td>Admin</td>
                        <td>Meet</td>
                        <td>
                            <a href="">Edit</a> |
                            <a href="">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#123</td>
                        <td>Demo</td>
                        <td>8989898989</td>
                        <td>14/03/2023</td>
                        <td>12:00PM</td>
                        <td>Admin</td>
                        <td>Meet</td>
                        <td>
                            <a href="">Edit</a> |
                            <a href="">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#123</td>
                        <td>Demo</td>
                        <td>8989898989</td>
                        <td>14/03/2023</td>
                        <td>12:00PM</td>
                        <td>Admin</td>
                        <td>Meet</td>
                        <td>
                            <a href="">Edit</a> |
                            <a href="">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#123</td>
                        <td>Demo</td>
                        <td>8989898989</td>
                        <td>14/03/2023</td>
                        <td>12:00PM</td>
                        <td>Admin</td>
                        <td>Meet</td>
                        <td>
                            <a href="">Edit</a> |
                            <a href="">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#123</td>
                        <td>Demo</td>
                        <td>8989898989</td>
                        <td>14/03/2023</td>
                        <td>12:0PM</td>
                        <td>Admin</td>
                        <td>Meet</td>
                        <td>
                            <a href="">Edit</a> |
                            <a href="">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#123</td>
                        <td>Demo</td>
                        <td>8989898989</td>
                        <td>14/03/2023</td>
                        <td>12:0PM</td>
                        <td>Admin</td>
                        <td>Meet</td>
                        <td>
                            <a href="">Edit</a> |
                            <a href="">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#123</td>
                        <td>Demo</td>
                        <td>8989898989</td>
                        <td>14/03/2023</td>
                        <td>12:0PM</td>
                        <td>Admin</td>
                        <td>Meet</td>
                        <td>
                            <a href="">Edit</a> |
                            <a href="">Delete</a>
                        </td>
                    </tr>
                </table> 
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