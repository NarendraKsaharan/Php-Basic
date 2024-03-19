<h3>Array</h3>
<?php

// indexed array
// associative array
// Multidimentional Array

// indexed array

//$students = ["Student 1", "Student 2", "Student 3", "Student 4"];

// $students[]= "Student 5";
// $students[]= "Student 6";
// $students[]= "Student 7";

// echo "<pre>";
// print_r($students);

// for($i = 0; $i <= sizeof($students); $i++) {
//     echo $students[$i];
//     echo "<br>";
// }



//$nums = [ 10, 20, 30, 40 ];

// echo "<pre>";
// print_r($nums);
//echo sizeof($nums);

//echo array_sum($nums);
// $result = 0;
// for($i = 0; $i < sizeof($nums); $i++) {
//     $result += $nums[$i]; // r = r + n
// }
// echo $result;



// $input1 = [10, 20, 30, 40];
// $input2 = [10, 20, 60, 40, 50];
// $output = 200;

// $input1 = [10, 20, 30, 40];
// $input2 = [10, 20, 60, 40];
// $output = [20, 40, 90, 80];

// $output = [];
// $output[0]= 10;


// $input1 = [30, 20, 50, 40, 5, 30, 55];

// $outp = 0;
// for($i = 0; $i < sizeof($input1); $i++) {
//     if($input1[$i] < $outp || $outp == 0) {
//         $outp = $input1[$i];
//     }
// }
// echo $outp;



// foreach($students as $key => $value) {
//     echo $key." -- ".$value;
//     echo "<br>"; 
// }


//echo sizeof($students);


// $students = ["Student 1", "Student 2", "Student 3", "Student 4"];
// // $students[]= "Student 1";
// // $students[]= "Student 2";
// $students[]= "Student 5";

// echo $students[3]??NULL;

// $students[3] = "Student 44";

// // echo $students[4];
// // echo $students[3]??NULL;

// echo "<pre>";
// print_r($students);

// associative array

// $students = [ "name" => "Student 1", "class" => "PHP class", "mobile" => "987654312"];
// $students["email"] = "p@gmail.com";

// echo $students["class"];
// $students["class"] = "HTML Class";
// // unset($students["class"]);
// // unset($students[3]);

// echo "<pre>";
// print_r($students);



// MultiD Array

// $students = [
//     "st1" => [ "name" => "Student 1", "class" => "PHP class", "mobile" => "987654312" ],
//     "st2" => [ "name" => "Student 2", "class" => "PHP class", "mobile" => "987654312" ],
//     [ "name" => "Student 3", "class" => "PHP class", "mobile" => "987654312" ]
// ];

// $students = [
//     [10, 20, 30],
//     [40, 50, 60],
//     [70, 80, 90]
// ];
// echo $students[1][0];

// $students[1][0] = 400;

// echo "<pre>";
// print_r($students);

// echo $students[1][0];


$nums = [
        [10, 20, 30, 35],
        [40, 50, 60],
        [70, 80, 90]
    ];

echo "<pre>";
// print_r($nums);
// echo $nums[0][1]
for($i = 0; $i < count($nums); $i++) {
    $inArr = $nums[$i];
    for($j = 0; $j < count($inArr); $j++) {
        // echo $inArr[$j];
        echo $nums[$i][$j];
        echo "<br>";
    }
}


// Exercise  // total
$nums = [
    [10, 20, 30],
    [40, 50, 60]
];
$output = 210;

//====================== row wise sum
$nums = [
    [10, 20, 30],
    [40, 50, 60]
];
$output = [ 60, 150 ];


//====================== Sum 
$nums = [
    [10, 20, 30],
    [40, 50, 60]
];
$output = [ 50, 70, 90 ];


//====================== Gratest value
$nums = [
    [10, 20, 30],
    [40, 50, 60]
];
$output = [ 30, 60 ];


?>