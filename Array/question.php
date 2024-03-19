<?php
echo "<h2>Q1. find avg,Seven lowest temp & seven Lowest temp record?</h2>";
// Recorded temperatures
$temp = [78, 60, 62, 68, 71, 68, 
         73, 85, 66, 64, 76, 63, 
         75, 76, 73, 68, 62, 73, 
         72, 65, 74, 62, 62, 65, 
         64, 68, 73, 75, 79, 73
        ];

//solution with implode function        

$avg = array_sum($temp) / count($temp);
echo "Avg  of temp = " . $avg . "<br>";


sort($temp);
$lowest = array_slice($temp, 0, 7);
echo "Seven lowest value is " . implode(", ", $lowest) . "<br>";


rsort($temp);
$highest = array_slice($temp, 0, 7);
echo "Seven highest value is " . implode(", ", $highest);
echo "<br>";

//Print with loop
$temp = [78, 60, 62, 68, 71, 68, 
         73, 85, 66, 64, 76, 63, 
         75, 76, 73, 68, 62, 73, 
         72, 65, 74, 62, 62, 65, 
         64, 68, 73, 75, 79, 73
        ];

$avg = array_sum($temp) / count($temp);

echo "Avg of Temp. is = " . $avg . "<br>";

sort($temp);
$lowest = [];

for ($i=0; $i < 7; $i++) { 
    $lowest[] = $temp[$i];
}
echo "Seven lowest value is " . join(", ",$lowest) . "<br>";

rsort($temp);
$highest = [];

for ($i=0; $i < 7; $i++) { 
    $highest[] = $temp[$i];
}
echo "Seven highest value is " . join(", ",$highest) . "<br>";
echo "<hr>";

echo "<h3>Q2. Ajusted Ascending & Decending order Given array</h3>";

$numbers = [8, 1, 5 ,7, 0 ,3 ,4 ,6 ,2 ,3 ,2];
//ascending
sort($numbers);
print_r($numbers);
echo "<br>";

//descending
rsort($numbers);
print_r($numbers);
echo "<hr>";

echo "<h3>Q3.Merge array and give new output</h3>";
$int = [
            [77, 87],
            [23, 45]
];
$str = ["w3resource", "com"];

$int = array_reverse($int);

$mix = array_merge($str, $int[0], $int[1]);

echo "<pre>";
print_r($mix);
echo "</pre>";

echo "<h3>";
$int = [
            [77, 87],
            [23, 45]
];
$str = ["w3resource", "com"];
$finel = [];

for ($i = 0; $i < count($int); $i++) {
    $sub = [];
    array_push($sub, $str[$i]);
    for ($j = 0; $j < count($int[$i]); $j++) {
        array_push($sub, $int[$i][$j]);
    }
    array_push($finel, $sub);
}
echo "<pre>";
print_r($finel);
echo "<hr>";


echo "<h3>Q4. Print uppercase and lowercase value given capitalize array</h3>";
$colors = array(
    "A" => "Blue",
    "B" => "Green",
    "c" => "Red"
);
foreach ($colors as $key => $value) {
    $up = strtoupper($value);
    $low = strtolower($value);

 echo "Uppercase value is = " . $up . "<br>";
 echo "Lowercase value is = " . $low . "<br>";


}

$colors = [                                          
    'A' => 'Blue',                                             
    'B' => 'Green',                                            
    'c' => 'Red'                                              
]; 
echo "<br>";
echo "<br>";
echo "<br>";


// Values are in lower case.
//echo "Values are in lower case." . PHP_EOL;  //line ending constet
$low = [];
foreach ($colors as $key => $value) {
    $low[$key] = strtolower($value);
}
print_r($low);

// Values are in upper case.
//echo "Values are in upper case.";
$up = [];
foreach ($colors as $key => $value) {
    $up[$key] = strtoupper($value);
}
print_r($up
);
echo "<hr>";


echo "<h3>Q5. Find all numbers between 200-250 by divisible 4</h3>";

$numbers = [];

for ($i=200; $i <=250 ; $i++) { 
    if ($i % 4 ==0) {
        $numbers[] = $i;
    }
}

print_r($numbers);

echo "This Q using implode function<br>";

$numbers = range(200, 250, 4);

echo implode(", ", $numbers). "<br>";

//echo implode(", ",range(200,250,4))." ";  //direct echo

echo "<h3>Q6. Find Min or Max lenth of given string value</h3>";

$str = ["abc", "abcd", "jhi", "pq", "r", "wop"];

$len = array_map("strlen",$str);

echo "Min lenth is = " .min($len) . "<br>";
echo "Min max is = " .max($len) . "<br>";

echo "<hr>";

echo "<h3>Q7. Print random number between 10-20</h3>";
$n = range(11,20);

shuffle($n);

for ($i=0; $i < 10; $i++) { 
    echo $n[$i] . " ";
}
//echo "&nbsp;";
echo "<hr>";

echo "<h3>Q8. Find largest & smallest key in given value</h3>";

$states = ["rajasthan","punjab","haryana","maharashtra",
            "gujrat","goa","karnataka","tamilnadu","andharapradesh"];
            
$largest = max(array_keys($states));
$smallest = min(array_keys($states));

echo "Largest key of given value is = " . $largest . "<br>";
echo "Samallest key of given value is = " . $smallest . "<br>";
echo "<hr>";

echo "<h3>Q9. Print Second and Red  in given value</h3>";
$color = [
        "color" => [
                "a" => "Red",
                "b" => "Green",
                "c" => "White"
                ],
        "numbers" => [
                    1,
                    2,
                    3,
                    4,
                    5,
                    6
                ],
        "holes" => [
                "First",
                5 => "Second",
                "Third"
                ]
];
  
  echo $color["holes"][5] . " "; // Output: Second
  echo $color["color"]["a"]; // Output: Red
echo "<hr>";  

// echo "<h3>Q9. Print Priority list by given value</h3>";
// $fruits = ["banana", "mango", "apple", "orange", "pinapple", "watermelon",
//                  "grapes", "kiwi", "papaya"];
// $priority = ["banana", "kiwi", "orange", "apple"];

// // Get the intersection of the two arrays


// $priorityFruits = array_intersect($fruits, $priority);

// // Sort the priority fruits based on their position in the priority list
// usort($priorityFruits, function ($a, $b) use ($priority) {
//     $aIndex = array_search($a, $priority);
//     $bIndex = array_search($b, $priority);
//     return $aIndex - $bIndex;
// });

// // Print the sorted priority fruits
// foreach ($priorityFruits as $fruit) {
//     echo $fruit . " ";
// }
//echo "<hr>";

// $data = array(
//     array('page_id' => 3, 'username' => 'brian'),
//     array('page_id' => 1, 'username' => 'anna'),
//     array('page_id' => 2, 'username' => 'dave'),
//     array('page_id' => 1, 'username' => 'zoe'),
//     array('page_id' => 3, 'username' => 'john')
// );

// // Define a function to be used as the sorting criteria
// function compare($a, $b) {
//     if ($a['page_id'] == $b['page_id']) {
//         // If the page_id is the same, compare the usernames
//         return strcmp($a['username'], $b['username']);
//     } else {
//         // Otherwise, compare the page_ids
//         return $a['page_id'] - $b['page_id'];
//     }
// }

// // Sort the array using the compare function
// usort($data, 'compare');

// // Print the sorted array
// print_r($data);




?>

