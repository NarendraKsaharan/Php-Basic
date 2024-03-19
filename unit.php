<?php

$a = 280;
$b = 270;
$c = 320;
$d = 330;
$e = 350;

if($a > $b) {
   if($a > $c) {
     if($a > $d) {
      if($a > $d) {
        if($a > $e) {
          echo "A";
        }else {
        echo "E1";
      }
      } 
     } else {
      if($d > $e) {
        echo "D1";
      } else {
        echo "E2";
      }
     }
   } else {
    if($c > $d) {
      if($c > $e) {
        echo "C1";
      } else {
        echo "E3";
      }
    } else {
      if($d > $e){
        echo "D2";
      } else {
        echo "E4";
      }
    }
   }
} else {
  if($b > $c) {
    if($b > $d) {
      if($b > $e) {
        echo "B";
      } else {
        echo "E5";
      }
    } else {
      if($d > $e) {
        echo "D3";
      } else {
        echo "E6";
      }
    }
  } else {
    if($c > $d) {
      if($c > $e) {
        echo "C2";
      } else {
        echo "E7";
      }
    } else {
      if($d > $e) {
        echo "D4";
      } else {
        echo "E8";
      }
    }
  }
}

 




// $units = 180;
// if ($units <= 50) {
//   $price = $units * 3.50;
// } elseif ($units <= 150) {
//   $price = 50 * 3.50 + ($units - 50) * 4;
// } elseif ($units <= 250) {
//   $price = 50 * 3.50 + 100 * 4 + ($units - 150) * 5;
// } else {
//   $price = 50 * 3.50 + 100 * 4 + 100 * 5 + ($units - 250) * 6;
// }
// echo "The cost of $units units is $price.";
?>