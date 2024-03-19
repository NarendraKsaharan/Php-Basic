<?php
//smallest valur & bigest valur
// $index = [100, 20, 30, 80, 50];
// $output = max($index);
// $input = min($index);
// print_r($output);
// echo "<br>";
// print_r($input);

//find bigest value both array
$impArray = [
    [10, 20, 30],
    [40, 50, 60]
];
$outPut = [];

// Loop through the rows of $impArray
for ($i = 0; $i < count($impArray); $i++) {
    // Use the max() function to get the maximum value of the row
    $maxValue = max($impArray[$i]);
    // Append the maximum value to $outPut
    $outPut[] = $maxValue;
}

print_r($outPut);   // This will print Array ( [0] => 30 [1] => 60 )

//find sum of both array seprate
// 

//find bigest value of all array


// $impArray = [
//     [10, 80, 30],
//     [100, 50, 60]
// ];

// $maxValue = $impArray[0][0]; // initialize max value with first element

// foreach ($impArray as $innerArray) {
//     foreach ($innerArray as $value) {
//         if ($value > $maxValue) {
//             $maxValue = $value;
//         }
//     }
// }

// echo "The biggest value in all arrays is: " . $maxValue;

  

?>