<?php
// Index array 
//Q. 1. Get biggest value from array

//(a).Index array
// $impArray = [
//     10, 20, 30
// ];

// $max = $impArray[0];
// foreach ($impArray as $value) {
//     if ($value > $max) {
//         $max = $value;
//     }
// }
// $output = [$max];
// echo "<pre>";
// print_r($output);
//======================

//(b).multi-dimensional array max
// $impArray = [
//     [10, 20, 30],
//     [40, 50, 60]
// ];
// $max = $impArray[0][0];

// foreach ($impArray as  $array) {
//     foreach ($array as $value) {
//         if ($value > $max) {
//             $max = $value;
//         }
//     }
// }
// $outPut = [$max];
// echo "<pre>";
// print_r($outPut);

//==================================================================

// 2.smallest value get
//(a). Index array
// $impArray = [10, 20, 30];

// $min = $impArray[0];

// foreach ($impArray as $value) {
//     if ($value < $min) {
//         $min = $value;
//     }
// }
// $output = [$min];
// echo "<pre>";
// print_r($output);
//================================

//(b.)multi-dimensional array
// $impArray = [
//     [10, 20, 30],
//     [40, 50, 60]
// ];

// $min = $impArray[0][0];

// foreach ($impArray as $array) {
//     foreach ($array as $value) {
//         if ($value < $min) {
//             $min = $value;
//         }
//     }
// }
// $output = [$min];
echo "<pre>";
// print_r($output);
//========================================================================

//Q.3. find biggest value of multi-dim array both seperate.
//Multidimensional
// $impArray = [
//     [10, 20, 30],
//     [40, 50, 60]
// ];

// $output = [];

// foreach ($impArray as $array) {
//     $output = $array[0];
//     foreach ($array as $value) {
//         if ($value > $output) {
//             $output = $value;
//         }
//     }
//     $max[] = $output;
// }
// echo "<pre>";
// print_r($max);
// =====================================================================

//Q. 4 sum of multi-dim array both seprate
// $impArray = [
//     [10, 20, 30],
//     [40, 50, 60]
// ];
// // $outPut = [60, 150];

// $sum = [];
// foreach ($impArray as $array) {
//     $sum = 0;
//     foreach ($array as $value) {
//         $sum += $value;
//     }
//     $result[] = $sum;
// }
// echo "<pre>";
// print_r($result);
// ==========================================================================

//Q.5 find sum of multi-dim array
// $impArray = [
//     [10, 20, 30],
//     [40, 50, 60]
// ];
// // $outPut = 210;
// $sum = 0;
// foreach ($impArray as $array) {
//     foreach ($array as $value) {
//         $sum += $value;
//     }
// }
// $result = [$sum];
// echo "<pre>";
// print_r($result);

//=============================================================================

// Ajusted Ascending & Decending order Given array
// $numbers = [8, 1, 5 ,7, 0 ,3 ,4 ,6 ,2 ,3 ,2];

//========================================

// Merge array give new output
// $int = [
//     [77, 87],
//     [23, 45]
// ];

//=================================================

// $array = '[
// 	{
// 	"name" : "John Garg",
// 	"age"  : "15",
// 	"school" : "Ahlcon Public school"
// 	},
// 	{
// 	"name" : "Smith Soy",
// 	"age"  : "16",
// 	"school" : "St. Marie school"
// 	},
// 	{
// 	"name" : "Charle Rena",
// 	"age"  : "16",
// 	"school" : "St. Columba school"
// 	}
// ]';
// $students = (array)json_decode($array);
// ?>
<!-- // <table border="1"> -->
<?php    
// foreach ($students as $student) {
// ?>    
<!-- //     <tr>
//         <th><?= $student->name ?></th>
//         <th><?= $student->age ?></th>
//         <th><?= $student->school ?></th>
//     </tr> -->
  
 <?php    
// }
//=====================================================



?>