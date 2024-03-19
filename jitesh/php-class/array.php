<?php


// $nums = [ 10, 20, 30, 40 ];

// $result = 0;
// for($i = 0; $i < sizeof($nums); $i++) {
//        echo $nums[$i];
//     echo "<br>";
// }
//echo $result;



// $student = [1 => "boy 1",5 => "boy 2", 9 => "boy 3"];

// $student[8] = "boy 4";
// $student[]  = "boy 5";


//  echo "<pre>";
// print_r($student);

// $k = 0;
// for($i = 0; $i < sizeof($student); $i++){
// echo $student[$i];
// echo "<br>";
// }

// foreach ($student as $key => $value) {
//          echo $key."&nbsp ".   $value;
//         echo "<br>";
// }

// $numb = [10,20,50,40];
// $k = 0;
// foreach ($numb as $key => $value) {
//          echo $value;
//          echo "<br>";
//          $k = $value;
// }
// if($numb > $k){
//     echo $k;
// }


// $input1 = [10, 20, 30, 40];
// $input2 = [10, 20, 70, 40];

// $total = 0;
// for($i = 0; $i < sizeof($input1); $i++) {
//     $total += $input1[$i];
// }
//     for($i = 0; $i < sizeof($input2); $i++) {
//         $total += $input2[$i];
//     }  

// echo $total ;

// $input1 = [20, 20, 30, 40, 50];
// $input2 = [10, 20, 60, 40];
// $output = [];
// for($i = 0,$j = 0; $i < sizeof($input1); $i++,$j++) {
//        $output[$j] = $input1[$i];
// }
// for($i = 0,$j = 0; $i < sizeof($input2); $i++,$j++) {
//     $output[$j] += $input2[$i];
// }
// echo "<pre>";
// print_r($output);

// $input1 = [20, 20, 60, 80, 40];
        
// $k = 0;

// for($i = 0; $i < sizeof($input1); $i++){
//     if($input1[$i] > $k){
//         $k = $input1[$i];
//     }
// }
// echo $k;

// function sum($nums){
//     $result = 0;
//     for($i = 0; $i < count($nums); $i++) {
//         $inArr = $nums[$i];
//         for($j = 0; $j < count($inArr); $j++) {
            
//             $result +=$nums[$i][$j];
//             }
//     }
//     return $result;
// }

// $nums = [
//     [10, 10, 30],
//     [40, 50, 60]
// ];

// $resp = sum($nums);
 
// echo $resp;



function rowsum($nums){

$output = [];
$result = 0;
for($i = 0; $i < count($nums); $i++) {
    $in = $nums[$i];
    for($j = 0; $j <count($in) ; $j++) {
        $result  += $in[$j];
        
        }$output[] = $result;
        $result = 0;
    }
       return $output;
}

// $nu = [
//     [10, 20, 30],
//     [40, 50, 40]
// ];
// $fun = rowsum($nu);
// echo "<pre>";
// print_r ($fun);



function grv($nums){
$k = 0;
$output = [];
for($i = 0; $i < count($nums); $i++){
      $d = $nums[$i];
      for($j = 0; $j < count($d); $j++){
        if($k < $d[$j]){
            $k = $d[$j];
        }
      }$output[] = $k;
        $k = 0;
} return $output;
}

// $nums = [
//     [10, 20, 30],
//     [40, 70, 50]
// ];

// $f = grv($nums);
// echo "<pre>";
// print_r ($f);


// echo "<table border='1' cellspacing='0' cellpadding = '20'>";
    
// for($i = 1; $i <= 8; $i++)
// {    $k = $i;
//     echo "<tr >";
//     for($j = 1; $j <= 8; $j++) {
//         if ($k % 2 == 0){
//         echo "<td bgcolor = 'black'> </td>";
//         $k++;
//     }
//     else{
//         echo "<td > </td>";
//         $k++;
// echo "</table>";
//     }
// }
//     echo "</tr>";
// }


$nums = [
    [10, 20, 30],
    [40, 50, 60]
];
$output = [ 50, 70, 90 ];

for ($i=0; $i < count($nums); $i++) {
        $k = $nums; 
    for($j = 0; $j < count($k); $j++){
        
    }  
}












?>

