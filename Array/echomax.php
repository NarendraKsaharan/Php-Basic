<?php

echo "<h5>Max or Min numbers in array:</h5>";
$numbers = [
    10,20,30,40,50
];
$outPut = 0;
    foreach($numbers as $value){
        $outPut > $numbers;
        $outPut = $numbers;
        
    }
print_r($outPut);


//  echo count($numbers);
// echo "<pre>";
// print_r($numbers);

// echo max($numbers). "<br>";
// echo min($numbers);
echo "<hr>";

echo "<h4> Find max value seprate in Multidimentinal(2) array</h4>";
$imparray = [
    [10, 20, 30],
    [40, 50, 60]
];
$maxvalue1 = max($imparray[0]);
$maxvalue2 = max($imparray[1]);

echo "Biggest value in first row is =" .$maxvalue1."<br>";
echo "Biggest value in Second row is =" .$maxvalue2."<br>";


echo "<h4> Find max value seprate in Multidimentinal[N] array with loop</h4>";

$impArray = [
    [10, 60, 30],
    [40, 50, 60],
    [20, 50, 90]
];
$outPut = [];

for ($i = 0; $i < count($impArray); $i++) {
    
    $max = max($impArray[$i]);
    
    $outPut[] = $max;
}
echo "<pre>";
print_r($outPut);
echo "<hr>";

echo "<h4> Find sum seprate in Multidimentinal[2] array </h4>";
$impArray = [
    [10, 20, 30],
    [40, 50, 60]
];

$first = array_sum($impArray[0]);
$Second = array_sum($impArray[1]);

echo "Sum of first Row is = ".$first."<br>";
echo "Sum of Second Row is = ".$Second."<br><br>";

echo "<h4> Find sum seprate in Multidimentinal[1] array with Loop </h4>";

$impArray = [
    [10, 20, 30],
    [40, 50, 60]
];

//First Row ke lie
$First = 0;
for ($i = 0; $i < count($impArray[0]); $i++) {
    $First += $impArray[0][$i];
}

echo "Sum of first row is = ".$first."<br>";

echo "<h4> Find sum seprate in Multidimentinal[N] array with  forLoop </h4>";
$impArray = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
];

$first = 0;
$second = 0;
$third = 0;
for ($i = 0; $i < count($impArray); $i++) {
    for ($j = 0; $j < count($impArray[$i]); $j++) {
        if ($i == 0) {
            $first += $impArray[$i][$j];
        } elseif($i == 1) {
            $second += $impArray[$i][$j];
        } elseif($i == 2) {
            $third += $impArray[$i][$j];
        }
    }
}

echo "Sum of first row is = " . $first . "<br>";
echo "Sum of second row is = " . $second . "<br>";
echo "Sum of third row is = " . $third . "<br><hr>";


// echo "<h4>Find one bigest value in multi dimenstinal array[N]<br>";
// $impArray = [
//     [10, 200, 30],
//     [40, 500, 60],
//     [70, 800, 90]
// ];

// $maxValue = max(array_map('max', $impArray));

// echo "Biggest value in array is = " . $maxValue. "<br>";

// echo "<h5>Find begest value in multidimensional array[N] with for-each loop<h5>";
$impArray = [
    [10, 80, 30],
    [40, 50, 60],
    [70, 90, 300]
];

$maxValue = null;

foreach ($impArray as $array) {
    foreach ($array as $value) {
        if ($maxValue === null || $value > $maxValue) {
            $maxValue = $value;
        }
    }
}

echo "The biggest value is: " . $maxValue . "<br>";

$impArray = [
    [10, 800, 30],
    [100, 50, 60]
];

$maxValue = $impArray[0][0]; 

foreach ($impArray as $innerArray) {
    foreach ($innerArray as $value) {
        if ($value > $maxValue) {
            $maxValue = $value;
        }
    }
}

echo "The biggest value in all arrays is: " . $maxValue . "<br>";
//the bigest value all array by for loop 
$impArray = [
    [100, 80, 30],
    [40, 50, 60]
];


$maxValue = $impArray[0][0];

for ($i = 0; $i < count($impArray); $i++) {
    for ($j = 0; $j
     < count($impArray[$i]); $j++) {
        if ($impArray[$i][$j] > $maxValue) {
            $maxValue = $impArray[$i][$j];
        }
    }
}

echo "The biggest value in the array is: " . $maxValue;

echo "<hr>";



echo "<h5>Find sum of all arays</h5>";

$impArray = [
    [10, 20, 30],
    [40, 50, 60]
];

$sum = array_sum(array_map('array_sum', $impArray));

echo "Sum of all value in 2 dim array is = " .$sum; 
echo "<br>";

echo "<h5>Find sum of all arays with For loop</h5>"; 
$impArray = [
    [10, 20, 30],
    [40, 50, 60]
];

$sum = 0;
for ($i = 0; $i < count($impArray); $i++) {
    for ($j = 0; $j < count($impArray[$i]); $j++) {
        $sum += $impArray[$i][$j];
    }
}

echo "Sum of all value in 2 dim array is = " . $sum; 
echo "<br>";


echo "<h5>Find sum of all arays with Foreach loop</h5>";
$impArray = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
];

$total = 0;
foreach ($impArray as $innerArray) {
    foreach ($innerArray as $finel) {
        $total += $finel;
    }
}

echo "Sum of all value in 3 dim array is = " . $total; 







?>