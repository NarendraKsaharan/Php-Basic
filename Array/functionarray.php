<?php
//find bigest value
$numbers = [
    10,80,30,40,50
];
function bigValue($numbers) {
    $finel = [];
    $output = $numbers[0];
    for ($i=0; $i < count($numbers); $i++) { 
        if ($numbers[$i] > $output) {
            $output = $numbers[$i];
        }
    }
    $finel[] = $output;
    return $finel;
}
$numbers = [
    10,80,30,40,50
];
$finelout = bigValue($numbers);
echo "<pre>";
print_r($finelout);
echo "<hr>";


//find smallest value
$numbers = [
    10,80,30,40,50
];
function smallValue($numbers) {
    $finel = [];
    $output = $numbers[0];
    for ($i=0; $i < count($numbers); $i++) { 
        if ($numbers[$i] < $output) {
            $output = $numbers[$i];
        }
    }
    $finel[] = $output;
    return $finel;
}
$numbers = [
    10,80,30,40,50
];
$finelout = smallValue($numbers);
echo "<pre>";
print_r($finelout);


//find bigest value in multi dim array

 function multiBig($input) {
    $output = [];
    for ($i=0; $i < count($input); $i++) { 
        $sum = 0;
        for ($j=0; $j < count($input[$i]); $j++) { 
            if ($sum < $input[$i][$j]) {
                $sum = $input[$i][$j]; 
            }
        }
        $output[] = $sum;
    }
    return $output;
}
$input = [
    [80, 20, 30],
    [40, 50, 60],
];
$maxout = multiBig($input);
echo "<pre>";
print_r($maxout);

//find max value in all mt dim array
function allBig($input) {
    $sum = 0;
    for ($i=0; $i < count($input); $i++) { 
        for ($j=0; $j < count($input[$i]); $j++) { 
            if ($sum < $input[$i][$j]) {
                $sum = $input[$i][$j]; 
            }
        }   
    }
    return $sum;
}
$input = [
    [80, 20, 30],
    [40, 100, 60],
];
$maxval = allBig($input);
$output = [$maxval];
echo "<pre>";
print_r($output);

//find sum mt dim array
function sumArray($input) {
    $output = [];
    for ($i=0; $i < count($input); $i++) { 
        $sum = 0;
        for ($j=0; $j < count($input[$i]); $j++) { 
            $sum += $input[$i][$j];
        } 
        $output[] = $sum;  
    }
    return $output;
}
$input = [
    [10, 20, 30],
    [40, 50, 60],
];
$sumval = sumArray($input);
echo "<pre>";
print_r($sumval); 
//find ALL value sum
function sumArray($input) {

    $sum = 0;
    for ($i=0; $i < count($input); $i++) { 
        
        for ($j=0; $j < count($input[$i]); $j++) { 
            $sum += $input[$i][$j];
        }
    }
    return $sum;
}
$input = [
    [10, 20, 30],
    [40, 50, 60],
];
$sumval = sumArray($input);
$output = [$sumval];
echo "<pre>";
print_r($output
);


?>