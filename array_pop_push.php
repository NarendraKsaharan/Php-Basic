<?php

echo "<h1>array_pop & array_push</h1>";
//pop delete last value of array
//push add value on end

$fruit = array('kiwi', 'mango', 'grapes', 'orange');

// array_pop($fruit);
array_push($fruit, 'banana');

echo "<pre>";
print_r($fruit);

?>