<?php
if (isset($_SESSION['success'])) {
        ?>
    
      <div class="success"><?= $_SESSION['success']?></div>
        <?php
        unset($_SESSION['success']);
    }
    if (isset($_SESSION['error'])) {
        ?>
    
      <div class="error"><?= $_SESSION['error']?></div>
        <?php
        unset($_SESSION['error']);
    }
?>