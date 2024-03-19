<?php
$numbers = [
    10,80,30,40,50
];

//max number find
$output = $numbers[0];
foreach ($numbers as $value) {
    if ($value > $output) {
        $output = $value;
    }
}
$max = [$output];
echo "<pre>";
print_r($max);


$numbers = [
    10,80,30,40,50
];

//min number find
$output = $numbers[0];
foreach ($numbers as $value) {
    if ($value < $output) {
        $output = $value;
    }
}
$min = [$output];
echo "<pre>";
print_r($min);
echo "<hr>";

//Max number find multi dim array
$impArray = [
    [10, 20, 30],
    [40, 50, 60]
];

$output = [];

foreach ($impArray as $subarray) {
    $output = $subarray[0];
    foreach ($subarray as $value) {
        if ($value > $output) {
            $output = $value;
        }
    }
    $maxnum[] = $output;
}
 
 echo "<pre>";
 print_r($maxnum);
 echo "<hr>";

//sum of both array seprate
$impArray = [
    [10, 20, 30],
    [40, 50, 60]
];

$sum = [];

foreach ($impArray as $innerarray) {
    $sum = 0;
    foreach ($innerarray as $subarray) {
        $sum += $subarray;
    }
    $finel[] = $sum;
}
print_r($finel);
echo "<hr>";

//all sum value 
$impArray = [
    [10, 20, 30],
    [40, 50, 60]
];
$sum = 0;
foreach ($impArray as $innerarray){ 
    foreach ($innerarray as $subarray) {
       $sum += $subarray;
    }
    
}
print_r($finel);




?>