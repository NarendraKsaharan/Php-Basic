<?php

//draw "R

for ($i = 1; $i <= 5; $i++) { 
    for ($j= 1; $j <= 5 ; $j++) { 
        if ($j== 1 || $j== 5 || $i == 1 || $i == 5 ) {
            echo "*  &nbsp;";
        } else {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
for ($i=1; $i <= 5 ; $i++) { 
    for ($j=1; $j <= 6; $j++) { 
        if ($j == 1 || $j == $i +1) {
            echo "* ";
        } else {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
echo "<br><br>";
echo "<hr>";


// *              *
//  *            *
//   *          *
//    *        *
//     *      *
//      *    *
//       *  *
//        *   

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
echo "<hr>";
echo "<br>";
echo "<br>";

//Draw for "A"

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
echo "<hr>";

// $output = 0;
// for($i = 1; $i <= 10; $i++)
// {
    
//     if($i <= 3 || $i >= 7) {
//         continue;
//     }
//     $output += $i;
    
// }

// echo $output;

//sum of 3-15




//   * *
// *     *
// *
//   * *
//       *
// *     *
//   * *

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
echo "<hr>";

echo "<br>";
echo "<br>";

//draw "E
for ($i=1; $i <= 5; $i++) { 
    for ($j=1; $j <= 9; $j++) { 
        
        if ($j == 1 || $j == 9 || $j == $i || $j == 10 - $i) {
            echo "*";
        }else{
            echo "&nbsp;&nbsp;";
        }
    }
  
  
    echo "<br>";
}
echo "<hr>";

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
  echo "<hr>";
  

// *            *
// * *        * *
// *  *     *   *
// *   *   *    *
// *     *      *
// *            *
// *            *

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
echo "<hr>";
echo "<br><br>";


// * * * * *
//     *
//     *
//     *
//     *
//     *
//     *
// * * * * *

//       *
//      * *
//     *   *
//    * * * *
//   *       *
//  *         *
// *           *




// * * * * * 
// *
// * 
// * * * * 
// *
// * 
// * * * * * 

// for($i = 1, $k = 1; $i <= 5; $i++)
// {
//     for($j = 1; $j <= $i; $j++, $k++)
//     {
//         echo $k." ";
//     }
//     echo "<br>";
// }


// for($i = 1; $i <= 7; $i++)
// {
//     if($i == 1 || $i == 4 || $i == 7)
//     {
//         $n = 5;
//         if($i==4) {
//             $n = 4;
//         }
//         for($j = 1; $j <= $n; $j++) {
//             echo "* ";
//         }
//     } else {
//         echo "*";
//     }
//     echo "<br>";
// }


// 	for ($i = 1; $i <= 20; $i++) {
// 	for ($j = 1; $j <= 20; $j++) {
// 	  if ($j == 1 || $j == 20 || $i == $j) {
// 		echo "*";
// 	  } else {
// 		echo "&nbsp;&nbsp;&nbsp;";
// 	  }
// 	}
// 	echo "<br>";
//   }

//   *                 *
//   * *               *
//   *   *             *
//   *     *           *
//   *       *         *
//   *         *       *
//   *           *     *
//   *             *   *
//   *               * *      
//   *                 *


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
  echo "<br>";
  echo "<hr>";
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

?>