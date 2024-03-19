<?php

   //array type
   
   // indexing
   // associative
   //Multidimentions
   
   //$numbers =[];
   //var_dump ($numbers);
   
   // $numbers =[
   //    10,
   //    20,
   //    30,
   //    40,
   //    50
   
   // ];
   // $numbers[] =60;
   //$numbers[] =70;
   //echo count($numbers);
   
   // for($i =0;$i < count($numbers);$i++){
   //    echo $numbers[$i];
   //    echo"<br>";
   // }
   
   
   // foreach($numbers as $num){
   //     echo $num;
   //     echo"<br>";
   // }
   
   // foreach($numbers as $key => $num){
   //     echo $key." =>". $num;
   //     echo"<br>";
   // }
   
   
   
   
   // $numbers =[10, 20, 30, 40, 50];
   
   // $numbers[] =60;
   
   // echo count($numbers);
   
   // echo "<pre>";
   // print_r($numbers);
   
   // echo $numbers[3];
   
   //echo $numbers[1];
   
   
   // associative array
   
   // $studentone = [
   //  "name" =>"sajjan kulhari",
   //  "class" =>"php class",
   //  "Gender" =>"Male",
   //  "age" =>21 
   //  ];
   // // echo"<pre>";
   // // print_r($studentone);
   
   // foreach($studentone as $student){
   //    echo $student;
   //    echo"<br>";
   // }
   
   
   
   // //Multidimentions array
   
   // $students =[
   //     [
   //       "name" => "student 1",
   //       "class" =>"php 1",
   //       "grnder" =>"male",
   //        "age" =>21
   //     ],
   //     [
   //     "name" => "student 2",
   //       "class" =>"php 2",
   //       "grnder" =>"female",
   //        "age" =>18
   //     ],
   //     [
   //     "name" => "student 3",
   //       "class" =>"php 3",
   //       "grnder" =>"male",
   //        "age" =>20
   //     ]
   
   //     ];
   //      //echo $students[0]["name"];
   
   //     // echo $students[1]["name"];
   //    // echo $students[0]["class"];
   //    echo $students[0]["age"];
   
   
   //    echo"<pre>";
   //    print_r($students);
   
   
   
   
   
   //Multidimentions array
   
   // $students =[
   //     [
   //        "student 1",
   //        "php 1",
   //       "male",
   //        21
   //     ],
   //     [
   //      "student 2",
   //       "php 2",
   //       "female",
   //        18
   //     ],
   //     [
   //     "student 3",
   //       "php 3",
   //       "male",
   //       20
   //     ]
   
   //     ];
   
   //$students[0][] = $students[0][0];
   //$students[0][0]="math";
   //$students[0][] =  $students[1][]=  $students[2][]="math";
   
   //$students[0][]="math";
   
   //$students[1][]="math";
   //     $students[2][]="math";
   //     //echo $students[0][0];
   //     // echo $students[1][0];
   //     echo $students[1][0];
   
   
   //    echo"<pre>";
   //    print_r($students);
   
   
   // $multiNumbers =[
   //      [10, 20, 30, 40],
   //      [50, 60, 70, 80]
   // ];
   //  echo"<pre>";
   // //print_r($multiNumbers);
   
   // for($i = 0; $i < count($multiNumbers); $i++){
   //     $innerArray = $multiNumbers[$i];
   //     for($j = 0; $j < count($innerArray);$j++){
   //        //echo $innerArray[$j];
   //        echo $multiNumbers[$i] [$j];
   //         echo"<br>";
   //     }   
   
   //    }
   
   
   
   
   // $input= [10, 20, 30, 40, 50];
   // output = 150
   
   // input $ar1 = [10, 20, 30];
   // input $ar2 = [40, 50, 60];
   // print_r [50, 70, 90]
   
   
   // input [10, 20, 30, 40, 50]
   // output = 150
   // $arr= [10, 20, 30, 40, 50,];
   
   // $arr[]=60;
   // $arr[]=70;
   // $b =0;
   
   // for($a =0 ;$a < count($arr); $a++){
   //    $b+=$arr[$a];
      
   //  }echo$b;
   
   
   
   
   // input $ar1 = [10, 20, 30];
   // input $ar2 = [40, 50, 60];
   // print_r [50, 70, 90]
   
   //   $a1 =[10, 20, 30];
   //   $a2 =[40, 50, 60];
   //  //print_r [50, 70, 90]
   
   // echo"<pre>";
   
   // $a =[]; 
   // for($i =0 ;$i < count($a1);$i++){
   //     $a[] =$a1[$i] + $a2[$i];
      
   // }print_r($a);
   
   
   
   // $numbers = [10, 20, 50, 15, 65, 70, 23];
   
   // // Output: 70 (matlab array main jo sbse baadi value hai wo aani chahiye 
   
   // $arr = [10, 20, 50, 30, 40, 70, 60]; 
   
   
   // $maximum =0;
   
   // for ($i = 0; $i < count($arr); $i++){
   
   //     if ($arr[$i]  >  $maximum){
   
   //         $maximum = $arr[$i];
   //     }
   
       
   // } print_r($maximum);
   
   // echo"<br>";
   
   // $arr = [10, 20, 9, 15, 23];
   // // //  // Output : 9 (matlab array main jo sbse chotti value hai wo aani chahiye )
   
   
   // $minimum = [];
   
   // for ($i = 0; $i < count($arr); $i++){
   
   //     if ($arr[$i] < $minimum){
   
   //         $minimum = $arr[$i];
   //     }
   
       
   // } print_r($minimum);
   
   
   
   
   // $ar1 = [10, 20, 30, 40];
   //  $ar2 = [50, 60, 70];
   // $a =[];
   //  //output in array [10, 20, 30, 40, 50, 60, 70]
   
   // echo"<pre>";
   
   // for($i =0; $i < count($ar1); $i++){
   //         $a[] =$ar1[$i];  
   
   // }
   //   for($j =0 ;$j < count($ar2);$j++){
   //     $a[] =$ar2[$j];
   //   }  
   
   // print_r($a); 
   
   
   
   // $num = [
   
   //         [50, 70, 90],
   //          [ 100, 130],
   //           [200, 250, 300]
           
   //         ];
           
   //         foreach($num as $key => $_innerArray) {
           
   //         foreach($_innerArray as $iKey => $value) {
               
   //             echo $key."=>".$iKey."=>".$value."<br>";
   //         }
   // }
   
   
   // $students =[
   // [
   //       "AA",
   //       "PHP A",
   //         "20",
   //         100
   // ],
   // [
   //      "BB",
   //       "PHP B",
   //       "30",
   //       300
   // ],
   // [
   //      "CC",
   //      "PHP C",
   //      "40",
   //      500
   
   // ]
   // ]
   // ?>
   
   <!-- // <table border ="1" cellspadding ="10" align ="center">
   //      <tr>
   //           <th>name</th>
   //           <th>class</th>
   //           <th>age</th>
   //           <th>fee</th>
   //      </tr> -->
   
    <?php
   //     for($i = 0;$i < count($students);$i++){
   //         echo"<tr>";
   //        $innerArray =$students[$i];
   //       for($j =0;$j < count($innerArray);$j++){
   //          echo "<td>" .($innerArray)[$j]. "</td>";
   
   //       }
   
   
   //      echo"</tr>";
   //     }
   
   
   // ?>
   <!-- // </table> -->
   
   <?php
   
   // $input =[
   //        [10, 20, 30],
   //        [40, 50],
   //        [60, 70, 80]
   // ];
   // //$output =[60 ,90 ,210]  
   // $output = [];
   // for($i = 0; $i < count($input); $i++){
   //   $innerArray =$input[$i];
   //      for ($j = 0; $j < count($innerArray); $j++){
   //            $output[$i] =($output[$i]??0) + $innerArray[$j];
   //      } 
   // }print_r($output);
   
   // echo "<pre>";
   
   //  $arr = [
   
   // [10, 20, 30],
   // [40, 50, 60],
   // [60, 70, 80]
   // ];
   // // $output = [110, 140, 170];
   // echo"<pre>";
   // $output = [];
   // for ($i = 0; $i < count($arr); $i++) {
   //     $innerArray =$arr[$i];
   
   //     for ($j = 0; $j < count($innerArray); $j++) {
   //         $output[$j] =($output[$j]??0) + $innerArray[$j];
   //     } 
   // }print_r($output);
   
   
   // $input =[
   //     [10, 20, 30],
   //     [10, 20, 30],
   //     [10, 20, 30, 100],
   //     [10, 20, 30]
   // ];
   // //$output =[40, 80, 120];
   // echo"<pre>";
   // $output =[];
   // for($i = 0; $i < count($input); $i++){
   // $innerArray =$input[$i];
   
   // for($j =0;$j < count($innerArray);$j++){
   //   $output[$j] =($output[$j]??0) + $innerArray[$j];
      
   // }
   
   // }print_r($output);
   
   
   // $input = [10, 30, 20, 60, 40];
   // $output = [];
   
   // for ($i = 0; $i < count($input); $i++) {
   
   //     for ($j = $i; $j < count($input); $j++) {
   //         if ($input[$i] > $input[$j]) {
   //            $a =0;
   //              $a = $input[$i];
   //            $input[$i] = $input[$j];
   //            $input[$j] = $a;
   //         } 
   //     } $output[] = $input[$i];
        
   // }
   
   // print_r($output);
   
   
   
   
   
   // $input = [110, 140, 170, 190 ];
   // //$output =[190, 170, 140, 110];
   
   
   // $output =[];
   // for($i = count($input) -1; $i >= 0;$i--){
     
   // $output[] =$input[$i];
   
      
   // }print_r($output); 
   
   
   // $ar1 =[10, 20, 30, 60];
   // $ar2 =[40, 50, 60];
   
   
   // $a =[]; 
   // for($i =0 ;$i < count($ar1);$i++){
   //     $a[] =$ar1[$i] + ($ar2[$i]??0);
      
   // }print_r($a);
   
   
   // $input =[110, 140, 200, 190, 210, 230, 240, 250];
   // //$output =[110, 150, 200, 200, 210, 240, 240, 260];
   // $output =[];
   
   // echo"<pre>";
   // for($i = 0; $i < count($input);$i++){
   //     if($i%2==1){
   //       $output[] = $input[$i] +10;
       
   //     }else{
   //         $output[] = $input[$i];
   //     }
       
   
   //  }
   //  print_r($output);
   
   // echo "<pre>";
   
   //  $input =[110, 140, 200, 190, 210, 230, 240, 250];
   // //  $output =[100, 150, 190, 200, 200, 240, 230, 260];
   
   // $output = [];
   
   // for ($i = 0; $i < count($input); $i++){
   
   // if ($i%2 == 0){
   
   //     $output[] = $input[$i] - 10;
   // } else {
   
   //     $output[] = $input[$i] + 10;
   // }
   
   // } print_r($output);
   
   
   //      $input =[110, 140, 200, 190, 210, 230, 240, 250];
   //  //  $output =[220, 70, 400, 95, 420, 115, 480, 125];
   
   
   // $output = [];
   
   // for ($i = 0; $i < count($input); $i++){
   
   // if ($i%2 == 0){
   
   //     $output[] = $input[$i] * 2;
   // } else {
   
   //     $output[] = $input[$i] / 2;
   // }
   
   // } print_r($output);
   
   
   
   // $input =[110, 140, 200, 190, 210, 230, 240, 250, 260];
   // //  $output =[120, 210, 220, 250, 270];
   
   
   // $output = [];
   
   // for ($i = 0; $i < count($input); $i++){
   
   // if ($i%2 == 1){
   //       continue;
   
   // } else {
   
   //    $output[] = $input[$i] + 10;
   // }
   
   // } print_r($output);
   
   
   
   // $input =[110, 140, 200, 190, 210, 230, 240, 250, 260];
   // //  $output =[110, 140,200,190];
   
   // echo"<pre>";
   // $output = [];
   
   // for ($i = 0; $i < count($input); $i++){
   
   // if ($i == 4){
   //       break;
   
   // } else {
   
   //    $output[] = $input[$i];
   // }
   
   // } print_r($output);
   
   
   
   
   
   //  $input =[1, 2, 3, 4, 5, 6, 7, 8, 9,10];
   // // //  $output =[1, 8, 9, 64, 25, 216, 49,512, 81, 1000];
   
   
   // $output = [];
   
   // for ($i = 0; $i < count($input); $i++){
   
   // if ($i%2 == 0){
   
   //     $output[] = $input[$i] ** 2;
   // } else {
   
   //     $output[] = $input[$i] ** 3;
   // }
   
   // } print_r($output);
   
   
   
   // $input =[110, 140, 200, 190, 210, 230, 240, 250];
   //  //  $output =[80, 100, 80, 100, 80, 100, 80, 100];
   
   // $output = [];
   
   // for ($i = 0; $i < count($input); $i++){
   
   // if ($i%2 == 0){
   
   //     $output[] = ($input[$i] %2)+80;
   // } else {
   
   //     $output[] = ($input[$i] %2) +100;
   // }
   
   // } print_r($output);
   

?>