<style>
    .success{
        color: blue;
        background: lightcyan;
        border: 1px solid #000;
        border-radius: 5px;
        padding: 15px;
        width: 30%;
        font-weight: bold;
        margin:auto;
        margin-top: 20px;
        font-size:30px;
        text-align:center;
    }
    .error{
        color: red;
        background: lightcyan;
        border: 1px solid #000;
        border-radius: 5px;
        padding: 15px;
        width: 30%;
        font-weight: bold;
        margin:auto;
        margin-top: 20px;
        font-size:30px;
        text-align:center;
    }
</style>


<?php
if (isset($_SESSION['success'])) {
    echo "<div class='success'>".$_SESSION['success']."</div>";
    unset($_SESSION['success']);
}
if (isset($_SESSION['error'])) {
    echo "<div class='error'>".$_SESSION['error']."</div>";
    unset($_SESSION['error']);
}
if (isset($_SESSION['deleted'])) {
    echo "<div class='success'>".$_SESSION['deleted']."</div>";
    unset($_SESSION['deleted']);
}
if (isset($_SESSION['updated'])) {
    echo "<div class='success'>".$_SESSION['updated']."</div>";
    unset($_SESSION['updated']);
}


?>