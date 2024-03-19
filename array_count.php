<?php
echo "<h1>Count , SizeOf, & Array_count_values</h1>";
echo "<br>";

$food = array('orange', 'grapes', 'kiwi', 'mango');

// echo count($food);
// echo sizeof($food);


$food = array(
        'fruit' => array('orange', 'grapes', 'kiwi'),
        'vagie' => array('potato', 'carrot', 'pea')
        );

    // echo count($food);
    // echo sizeof($food);
    // echo count($food, 1);
    // echo count($food['fruit'], 1);
    // echo "<pre>";
    // print_r($food);


    $food = array('orange', 'grapes', 'kiwi', 'mango', 'kiwi');
    $len = count($food);

    for ($i=0; $i < $len; $i++) { 
        echo $food[$i]. "<br>";
    }
    echo "<pre>";
    print_r(array_count_values($food));



?>