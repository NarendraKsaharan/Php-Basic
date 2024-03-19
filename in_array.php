<?php
echo "<h1>in_array or array_search</h1>";

echo "in_array-> basiclly retun true or false";
echo "<br>";
echo "array_search-> basiclly retun key";
echo "<br>";

$food = array('orange', 'grapes', 'kiwi', 55, 'mango');

// echo in_array('kiwi', $food, true);

// if (in_array(55, $food, true)) {
//     echo "Find Successfully";
// } else {
//     echo "Can't Find";
// }

$a = array(array('a', 'b'), array('c', 'd'), 'p');

if (in_array(array('a', 'b'), $a, true)) {
    echo "Find Successfully";
} else {
    echo "Can't Find";
}
echo "<br>";
echo "<br>";


$food = array('orange', 'grapes', 'kiwi', 'mango');

echo array_search('kiwi', $food);
echo "<br>";

$food = array('a' => 'orange', 'b' => 'grapes', 'c' => 'kiwi', 'd'=> 'mango');
echo array_search('kiwi', $food);

?>