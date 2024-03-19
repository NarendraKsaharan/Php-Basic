<?php

// Array Type

// Index Array
$maxx = [];
$arry =[10,20,30,40,50];
       $max=$arry[1];
       for($i =0;$i<count($arry);$i++){
        if($max > $arry[$i]){
            $max = $arry[$i];
        }
       } 
echo "<pre>";
// print_r ($arry);
$maxx[] = $max;
  
$arry =[10,20,30,40,50];
$max=$arry[1];
for($i =0;$i<count($arry);$i++){
 if($max < $arry[$i]){
     $max = $arry[$i];
 }
}
$maxx[] = $max;
echo "Index Array Small and Biggest Value<br>";
echo "Output ===============<br><br>";

print_r ($maxx); 
echo "<hr>";

// // Multidimensional Array  

$allmaxvalue = [];
$multiArray = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
];
echo "<pre>";

// print_r ($multiArray);

echo "Biggest Value each Array <br>";
echo "Output =============== <br><br>";
$c = 0;

foreach($multiArray as $inner){
    $c = 0;
    foreach($inner as $inn){
       if($c < $inn){
        $c = $inn;
       }
    }$allmaxvalue [] = $c;   
}
print_r($allmaxvalue);
echo "<hr>";


echo "Biggest Value each Array <br>";
echo "Output =============== <br><br>";
$impArray = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90],
    [100, 110, 120]
];
$big = [];
// echo "<pre>";
// print_r($impArray);

for($a = 0; $a < count($impArray); $a++){
    $c = $impArray[0][0];
    $maxValue = $impArray[$a];
    for($b = 0; $b < count($maxValue); $b++){
        if($c < $maxValue[$b]){
            $c = $maxValue[$b];
        }  
    }
   $big[] = $c;
}

print_r($big);
echo "<hr>";


//  // Multidimensional Array  

$totalvalue = [];
$multiArray = [
    [10, 20, 30, 40],
    [40, 50, 60]
];

// print_r($multiArray);

 //output = multiArray seprate Total value 

$first = 0;

foreach($multiArray[0]  as $inner){
    $first += $inner;
}
$totalvalue[] = $first;
 
$second = 0;

foreach($multiArray[1] as $inner){
    $second += $inner;
}
$totalvalue[] = $second;

echo "MultiArray Seprate Total Value <br>";
echo "Output =============== <br><br>";
print_r($totalvalue);
echo "<hr>";



$totalvalue = [];
$multiArray = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
];

foreach($multiArray as $value){
    $total = 0;
    foreach($value as $inner){
        $total += $inner;
    }
    $totalvalue[] = $total;
}

echo "MultiArray Seprate Total Value <br>";
echo "Output =============== <br><br>";
print_r($totalvalue);
echo "<hr>";

$multiArray = [
    [10, 200, 30],
    [40, 500, 60]
];
$total = [];

// print_r($multiArray);

$f = 0;
foreach($multiArray as $inner){
    foreach($inner as $inn){
        $f += $inn;
    }
}
$total[] = $f;

echo "multiArray Total value <br>"; 
echo "Output =============== <br><br>"; 

print_r($total);
echo "<hr>"; 

//output = multiArray Array  total value

$impArray = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
];
// echo "<pre>";
// print_r($impArray);

$total = [];

$c = 0;
for($a = 0; $a < count($impArray); $a++){
    $maxValue = $impArray[$a];
    for($b = 0; $b < count($maxValue); $b++){   
        $c += $maxValue[$b];
    }
}
 $total[] = $c;

 echo "multiArray Total value <br>";
echo "Output =============== <br><br>"; 

print_r($total);
echo "<hr>";   

// Max Value Multi Array

$impArray = [
    [10, 20, 30],
    [40, 50, 60]
];
$max = [];
// print_r($impArray); 
$maxValue = $impArray[0][0];

foreach ($impArray as $innerArray) {
    foreach ($innerArray as $value) {
        if ($value > $maxValue) {
            $maxValue = $value;
        }
    }
} 
$max[] = $maxValue;

echo "multiArray Max value <br>";
echo "Output =============== <br><br>"; 
print_r($max); 

echo "<hr>";


?> 