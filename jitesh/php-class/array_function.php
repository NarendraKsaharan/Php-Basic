<?php


function pyramid ($limit){
$output = "" ;
for($i = 1; $i <= $limit; $i++){
    for($j = 1; $j <= $i; $j++){
        $output .=  "* ";
    }$output .= "<br>";
}
return $output;
}

function factorial($output){
    $output ;
$x = $output;

for($i = 1; $i <= $x-1 ; $i++){
     $output*=$i;  
}
return $output;

}
function power($a,$b){
   return $a**$b;
}

function fibo($d){
    $k = "";
    $a = 0;
    $b = 1;
    $c = 0;
    for($i = 1; $i <= $d; $i++){
        $k .=" ". $a;
        $a = $b + $c;
        $b = $c;
        $c = $a;
    }return $k;
    }

 function armno($a){

$k = "";

for($i = 1; $i <= $a; $i++) {

        $no = $i;
        $oldNo = $no;
        $total = 0;
        while($no > 0) {
            $num = $no%10;
            $total += $num**3;
            $no = (int)($no/10);
        }
        if($oldNo == $total) {
          $k .= $oldNo." "  ;
        }   } return $k;
   }








?>