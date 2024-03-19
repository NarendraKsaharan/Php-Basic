<?php

// $impArray = [
//     [10, 80, 30],
//     [40, 90, 60]
// ];
// $outPut = [];

// // Loop through the rows of $impArray
// for ($i = 0; $i < count($impArray); $i++) {
//     // Use the max() function to get the maximum value of the row
//     $maxValue = max($impArray[$i]);
//     // Append the maximum value to $outPut
//     $outPut[] = $maxValue;
// }

// print_r($outPut);   // This will print Array ( [0] => 30 [1] => 60 )

$impArray = [
    [10, 70, 30],
    [40, 50, 60]
];

$sum = 0;
foreach ($impArray as $subarray) {
    
    foreach ($subarray as $value) {
        $sum += $value;
    }
    
}

echo $sum;

// $impArray = [
//     [10, 70, 30],
//     [40, 50, 60]
// ];

// $sum = 0;
// foreach ($impArray[1] as $value) {
//     $sum += $value;
// }

// echo $sum;

$impArray = [
    [10, 70, 30],
    [40, 50, 60]
];

$sum = 0;
foreach ($impArray[0] as $value) {
    $sum += $value;
}

echo $sum;




?>