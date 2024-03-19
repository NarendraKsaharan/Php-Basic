<?php

class Calculation
{
    function arrayTotal($input) {
        // $output = [60, 150];
        $output = [];
        for($i = 0; $i < count($input); $i++) {
            $sum = 0;
            for($j = 0; $j < count($input[$i]); $j++) {
                if ($sum < $input[$i][$j]) {
                    $sum = $input[$i][$j];
                }  
                
            }
            $output[] = $sum;
        }
        return $output;
    }
    
    $input = [
        [10, 80, 30],
        [110, 50, 60]
    ];
    
    $funOutput = arrayTotal($input);


}

$calObj = new Calculation;

print_r($funOutput);



?>