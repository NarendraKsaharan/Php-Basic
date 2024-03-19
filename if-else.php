<?php


 // $a = 50;
// $b = 120;
// $c = 150;
// $d = 170;
// $e = 160;

// if($a > $b) {
// 	 if($a > $c) {
// 	 	 if($a > $d) {
// 	 	 	if($a > $e) {
// 	 	 		echo "A";
// 	 	 	} else {
// 	 	 		echo "E1";
// 	 	 	}
// 	 	 } else {
// 	 	 	if($d > $e) {
// 	 	 		echo "D1";
// 	 	 	} else {
// 	 	 		echo "E2";
// 	 	 	}
// 	 	 }
// 	 } else {
// 	 	if($c > $d) {
// 	 		if($c > $e) {
// 	 			echo "C1";
// 	 		} else {
// 	 			echo "E3";
// 	 		}
// 	 	} else {
// 	 		if($d > $e){
// 	 			echo "D2";
// 	 		} else {
// 	 			echo "E4";
// 	 		}
// 	 	}
// 	 }
// } else {
// 	if($b > $c) {
// 		if($b > $d) {
// 			if($b > $e) {
// 				echo "B";
// 			} else {
// 				echo "E5"
// 			}
// 		} else {
// 			if($d > $e) {
// 				echo "D3";
// 			} else {
// 				echo "E6";
// 			}
// 		}
// 	} else {
// 		if($c > $d) {
// 			if($c > $e) {
// 				echo "C2";
// 			} else {
// 				echo "E7";
// 			}
// 		} else {
// 			if($d > $e) {
// 				echo "D4";
// 			} else {
// 				echo "E8";
// 			}
// 		}
// 	}
// }


//  0-50 unit 3.50/per unit charge
// 51-150 unit 4/per unit charge
// 151-250 unit 5/per unit charge
// 251-350 unit 6/per unit charge
// >351 unit 7/per unit charge


 $units = 420;
if ($units <= 50) {
  $Rs = $units * 3.50;
} elseif ($units <= 150) {
  $Rs = 50 * 3.50 + ($units - 50) * 4;
} elseif ($units <= 250) {
  $Rs = 50 * 3.50 + 100 * 4 + ($units - 150) * 5;
} elseif ($units <= 350 ){
  $Rs = 50 * 3.50 + 100 * 4 + 100 * 5 + ($units - 250) * 6;
} else {
  $Rs = 50 * 3.50 + 100 * 4 + 100 * 5 + 100 * 6 + ($units - 350) * 7;	
}
echo $Rs;



?>