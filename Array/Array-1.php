<?php
    //array Type
    //(1)indexing arrays
    //(2)Associative arrays
    //(3)Multidimensional arrays

// Index array 
//Get biggest value from array
//Get Smallest value from array

//Multidimensional
// $impArray = [
//     [10, 20, 30],
//     [40, 50, 60]
// ];
// $outPut = [30, 60];

// =======================

// $impArray = [
//     [10, 20, 30],
//     [40, 50, 60]
// ];
// $outPut = [60, 150];

// ========================
// $impArray = [
//     [10, 20, 30],
//     [40, 50, 60]
// ];
// $outPut = 60;

//=======================

// $indArray = [
//     [10, 20, 30],
//     [40, 50, 60]
// ];
// echo "<pre>";
// print_r($indArray);

// $indArray[0][] = $indArray[0][0];
// $indArray[0][0] = 5;

// print_r($indArray);
// $sum = 0;
// for($i = 0; $i < count($indArray); $i++) {  
//     for($j = 0; $j < count($indArray[$i]); $j++) {
//         $sum += $indArray[$i][$j];
//     }
// }
// echo $sum;


// $indArray = [
//     10, 20, 30, 40, 50
// ];

// echo "<pre>";
// print_r($indArray);

// $k = 0;
// for($i = 0; $i < count($indArray); $i++)
// {
//     $k += $indArray[$i];
//     //echo $indArray[$i];
//     //echo "<br>";
// }

// echo $k;


// $indArray = [
//     "a" => 10,
//     "b" => 20,
//     "c" => 30,
//     "d" => 40,
//     "e" => 50
// ];

// echo "<pre>";
// print_r($indArray);

// foreach($indArray as $key => $value) {
//     echo $key."=>".$value;
//     echo "<br>";
// }




    





//(1)indexing arrays
    // $numbers = [10, 20, 30, 40, 50];
    // echo "<pre>"; 
    // print_r($numbers);

    
// echo "<br><br><br><br>";


//     $numbers = [10, 20, 30, 40, 50];

//     echo "<pre>"; 
//     print_r($numbers);

//     -.

// echo "<br><br><br><br>";


    // $numbers = [10, 20, 30, 40, 50];
    // $numbers[] = 60;
    // echo count($numbers);

    // echo "<pre>"; 
    // print_r($numbers);

    // echo $numbers[1];

// echo "<br><br><br><br>";



//(2)Associative arrays
    // $studentone = [
    //     "name" => "Shrawan Sharma",
    //     "class" => "PHP Class",
    //     "gender" => "Male",
    //     "age" => 30
    // ];
    // echo "<pre>"; 
    // print_r($studentone);
    // echo count($studentone);




//(3)Multidimensional arrays
    // $studens = [
    //     [
    //         "name" => "Student 1",
    //         "Class" => "Php 1",
    //         "gender" => "m",
    //         "age" => 20
    //     ],
    //     [
    //         "name" => "Student 2",
    //         "Class" => "Php 2",
    //         "gender" => "F",
    //         "age" => 15
    //     ],
    //     [
    //         "name" => "Student 3",
    //         "Class" => "Php 3",
    //         "gender" => "m",
    //         "age" => 20
    //     ]

    // ];
    // echo $studens[1]["name"];

    // echo "<pre>";
    // print_r($studens);



    // $studens = [
    //     [
    //          "Student 1",
    //          "Php 1",
    //          "m",
    //          20
    //     ],
    //     [
    //         "Student 2",
    //          "Php 2",
    //          "F",
    //          15
    //     ],
    //     [
    //          "Student 3",
    //          "Php 3",
    //          "m",
    //          20
    //     ]

    // ];
    // $studens[0][]= $studens[0][0];
    // $studens[0][0]= "math";

    
    // $studens[0][]=$studens[1][]=$studens[2][]= "math";

    // $studens[0][]= "math";

    // echo $studens[1][0];

    // echo "<pre>";
    // print_r($studens);


    // $numbers = [
    //     10,
    //     20,
    //     30,
    //     40, 
    //     50
    // ];
    // $numbers[] = 60;
    
    // for($i = 0; $i < count($numbers); $i++) {
    //     echo $numbers[$i];
    //     echo "<br>";
    // }


    // foreach($numbers as $key => $num) {
    //     echo $key."=>".$num;
    //     echo "<br>";
    // }


$multiNumbers = [
    [10, 20, 30, 40],
    [50, 60, 70, 80]
];
echo "<pre>";
// print_r($multiNumbers);

for($i = 0; $i < count($multiNumbers); $i++) {
    $innerArray = $multiNumbers[$i];
    for($j = 0; $j < count($innerArray); $j++) {
        // echo $innerArray[$j];
        echo $multiNumbers[$i] [$j];
        echo "<br>";
    }
}



?>