<style>
    .success{
        width: 30%;
        padding: 10px;
        background: lightgray;
        color: Green;
        border: 2 px solid black;
        font-size: 25px;
        margin-left: 37%;
        margin-top: 25px;
    }
    .error{
        width: 30%;
        padding: 10px;
        background: lightgray;
        color: red;
        border: 2 px solid black;
        font-size: 25px;
        font-weight: bold;
        margin-left: 37%;
        margin-top: 25px;
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



?>