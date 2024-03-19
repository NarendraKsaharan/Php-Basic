<?php
//Indexing array

$marks = [10, 20, 30, 40, 50, 60];

$marks[] = 70;     //add extra value in array print outside
echo "<pre>";      //same condition me print ke lie
print_r($marks);   //all condition print together print use print_r

echo $marks[3];    //array me koi special condition print karni ho 

echo "<br>";
echo count($marks);  //array me no of condition check

?>