<?php
echo "<h1>array_replace & array_replace_recursive</h1>";


$fruit = array('kiwi', 'mango', 'grapes', 'orange');
$vagie = array('pea', 'carrot');

$color = array('red', 'blue', 'green');

$newArray = array_replace($fruit, $vagie, $color);

echo "<pre>";
print_r($newArray);
echo "<br>";
echo "<br>";

$array1 = array('a' => array('red'), 'b' => array('green', 'pink'));
$array2 = array('a' => array('yellow'), 'b' => array('black'));

$newArray = array_replace_recursive($array1, $array2);

echo "<pre>";
print_r($newArray);


?>