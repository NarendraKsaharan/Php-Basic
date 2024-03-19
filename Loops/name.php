<?php
for ($i = 1; $i <= 7; $i++) {
    for ($j = 1; $j <= 6; $j++) {
      if ($i == 1 || $i == 7 || $j == (8 - $i)) {
        echo "* ";
      } else {
        echo "&nbsp;&nbsp;";
      }
    }
    echo "<br/>";
  }
  
//draw R
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
      if ($j == 1 || ($i == 1 && $j < 5) || ($i == 3 && $j < 5) || ($j == 5 && ($i == 2 || $i == 4 || $i == 5))) {
        echo "*";
      } else {
        echo "&nbsp;&nbsp;";
      }
    }
    echo "<br/>";
  }

  
?>