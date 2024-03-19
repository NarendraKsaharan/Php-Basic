<style>
    .success{
        color: skyblue;
        border: 1px solid #000;
        border-redius: 5px;
        padding: 10px;
        width: 78.4%;
        font-weight: bold;
    }
    .error{
        color: red;
        border: 1px solid #000;
        border-redius: 5px;
        padding: 10px;
        width: 78.4%;
        font-weight: bold;
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