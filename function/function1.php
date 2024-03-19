<?php
function alphabate($char){
    if ($char == "N"){
    for ($i=1; $i <=12; $i++) { 
        for ($j=1; $j <= 12; $j++) { 
            if ($j == 1 || $j == 12 || ($i == $j)){
            echo "*";
            }else{
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
      }
      
} elseif ($char == "D") {
    for ($i=1; $i <= 8 ; $i++) { 
        for ($j=1; $j <= 6; $j++) { 
            if ($j == 1) {
                echo "* ";
            }elseif ($i == 1 || $i == 8) {
                if ($j == 2 || $j == 3 || $j == 4) {
                    echo "* &nbsp;";
                } else {
                    echo "&nbsp;";
                }
            } elseif ($i == 2 || $i == 7) {
                if ($j == 5) {
                    echo "* ";
                }else {
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                }
            } elseif ($i == 3 || $i == 4 || $i == 5 || $i == 6) {
                if ($j == 6) {
                    echo "* ";
                }else {
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                }
    
            }
            else {
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }
} elseif ($char == "M") {
    for ($i=1; $i <= 6 ; $i++) { 
        for ($j=1; $j <= 7 ; $j++) { 
            if ($j == 1 || $j ==7) {
                echo "* ";
            } elseif ($i == 2 ) {
                if ($j == 2 || $j == 6) {
                    echo "* ";
                } else {
                    echo "&nbsp;&nbsp;&nbsp;";
                }
                    
            } elseif ( $i == 3) {
                if ($j == 3 || $j == 5) {
                    echo "* ";
                } else {
                    echo "&nbsp;&nbsp;&nbsp;";
                }
            } elseif ($i == 4 && $j == 4) {
                    echo "* ";
            }
             else {
                echo "&nbsp;&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
} elseif ($char == "S") {
    for ($i=1; $i <= 7 ; $i++) { 
        for ($j=1; $j <= 4; $j++) { 
            if ($i == 1 || $i == 4 || $i == 7) {
                if ($j == 2 || $j == 3 ) {
                    echo "* ";
                } else {
                    echo "&nbsp;&nbsp;&nbsp;";
                }
            } elseif ($i == 2 || $i == 6) {
                    if ($j == 1 || $j == 4) {
                        echo "* ";
                    }else {
                        echo "&nbsp;&nbsp;&nbsp;";
                    }
            } elseif ($i == 3 && $j == 1) {
                 echo "* ";
            }  elseif ($i == 5 && $j == 4) {
                 echo "* ";
            } else {
                echo "&nbsp;&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
} elseif ($char == "V") {
    for ($i=1;  $i <= 8; $i++) { 
        for ($j=1; $j <= 15; $j++) { 
            if ($j == $i || $j == 16- $i) {
                echo "* ";
            }else{
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
} elseif ($char == "A") {
    for ($i=1; $i <= 9; $i++) { 
        for ($j=1; $j <= 17; $j++) { 
            if ($j == 10 - $i || $j == 8 + $i) {
                echo "* ";
            }elseif ($i == 5) {
                if ($j == 7 || $j == 9 || $j == 11) {
                    echo "*";
                }else {
                    echo "&nbsp;&nbsp;";
                }
            }else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
} elseif ($char == "E") {
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
          if ($i == 1 || $i == 5 || $i == 3) {
            echo "*";
          } elseif ($i == 2 && $j == 1) {
            echo "*";
    
          } elseif ($i == 4 && $j == 5) {
            echo "*";
          } else {
            echo " ";
    
          }
        }
        echo "<br>";
      }
}
}

alphabate("E");






?>