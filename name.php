<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
      if ($j == 1 || $j == 5 || ($i == 1 && $j > 1 && $j < 5) || ($i == $j && $i > 2) || ($i == 4 && $j == 4) || ($i == 5 && $j == 5)) {
        echo "*";
      } else {
        echo "&nbsp;&nbsp;";
      }
    }
    echo "<br/>";
  }




?>