<?php

// include("files2.php");
// include("files2.php");

//include_once("files2.php1");
// include_once("files2.php");

// require_once("files2.php1");

// echo "<br>Advance function";

$data = ["name" => "Student Name 1", "class" => "Class A", "age" => 30];


//echo implode(",", $data);

$jData = json_encode($data);

$jaData = (array)json_decode($jData);

//echo $jaData->class;

//echo gettype($jaData);

//print_r($jaData);

// echo "<pre>";
// print_r($data);


// $a = 35;

// echo (double)$a;



?>