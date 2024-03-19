<style>
    .success{
        color: green;
        font-weight:bold;
        padding: 10px;
        border: 1px solid #000;
        border-radius: 5px;
        width: 32.5%;
    }
    .error{
        color: red;
        font-weight:bold;
        padding: 10px;
        border: 1px solid #000;
        border-radius: 5px;
        width: 32.5%;
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