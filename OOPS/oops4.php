<?php

class student {

    function __construct(){
        echo "Construct <br>";
    }

    function name(){
        return "Shubham ";
    }

    function last(){
        return "Joshi <hr>";
    }

    function array(){
        $multiArray = [
            [10, 20, 30],
            [40, 50, 60],
            [70, 80, 90]
        ];  
        $max1 = [];
        //  print_r($multiArray); 
        $max = $multiArray[0][0];
        for($a = 0; $a < count($multiArray); $a++){
            for($b = 0; $b < count($multiArray[$a]); $b++){
                if($max < $multiArray[$a][$b]){
                    $max = $multiArray[$a][$b];
                }
            }
        }
        $max1[] = $max;
        echo "MultiArray All Max value <br>";
        echo "Output =============== <br> <pre>"; 
        print_r($max1);
        echo "<hr>";
    }

}

$stuobj = new student;
$output = $stuobj;
echo $output->name();
echo $output->last();
echo $output->array();



?>