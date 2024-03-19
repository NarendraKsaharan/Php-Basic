<?php
//Multidimentional array

$students = [
    [
        "name" => "Vaibhav",
        "class" => "PHP",
        "gender" => "M",
        "age"  => 20
    ],
    [
        "name" => "Ashish",
        "class" => "PHP",
        "gender" => "M",
        "age"  => 24
    ],
    [
        "name" => "Rasmi",
        "class" => "PHP",
        "gender" => "F",
        "age"  => 25
    ]
];

$students[0]["sub"] = $students[1]["sub"] = $students[2]["sub"] = "math";
echo count($students);
echo "<br>";
echo $students[1]["age"];   //perticulller print
echo "<pre>";
print_r($students);

?>