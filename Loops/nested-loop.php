<table width="800px" height="600px" cellpadding="0" cellspacing="0" align="center">
    <?php

for ($row=1; $row <= 10; $row++) { 
    echo "<tr>";
    for ($col=1; $col <= 8; $col++) { 
        $sum = $row + $col;
        if ($sum % 2 == 0) {
            echo "<td width=25px height=25px bgcolor=#e3e1e4></td>";
        }
        else{
            echo "<td width=25px height=25px bgcolor=lightgreen></td>";
        }
    }
    echo "</tr>";
}



    ?>

</table>



<!-- <table border="1" cellpadding="5" cellspacing="0">
    <?php
    for($i = 1; $i <= 5; $i++)
    {
        echo "<tr>";
        for($j = 1; $j <= 5; $j++) {
            echo "<td>".$i."</td>";
        }
        echo "</tr>";
    }
    ?>
</table> -->

<?php

for ($i = 1; $i <= 5; $i++) {
  for ($j = 1; $j <= 5 - $i; $j++) {
    echo "_ ";
  }
  for ($k = 1; $k <= $i; $k++) {
    echo $k . " ";
  }
  echo "<br>";
}


// _ _ _ _ 1
// _ _ _ 1 2
// _ _ 1 2 3
// _ 1 2 3 4
// 1 2 3 4 5

$rows = 5;

$num = 1;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num . " ";
        $num++;
    }
    echo "<br>";
}

$x = 1;
for ($i=1; $i <= 6; $i++) { 
    for ($j=1; $j < $i; $j++, $x++) { 
        echo $x. " ";
        
    }
    echo "<br>";
}

// 1
// 2 3
// 4 5 6
// 7 8 9 10
// 11 12 13 14 15





// for($i = 5, $k = 1; $i >= 1; $i--)
// {
//     for($j = 1; $j <= $i; $j++, $k++)
//     {
//         echo "* ";
//     }
//     echo "<br>";
// }


// for($i = 5; $i >= 1; $i--)
// {
//     for($j = $i; $j >= 1; $j--)
//     {
//         echo "* ";
//     }
//     echo "<br>";
// }



// * * * * *
// * * * *
// * * *
// * *
// *


// for($i = 1; $i <= 5; $i++)
// {
//     for($j = 1; $j <= $i; $j++)
//     {
//         echo "* ";
//     }
//     echo "<br>";
// }



// *
// * *
// * * *
// * * * *
// * * * * *




// for($i = 1; $i <= 5; $i++)
// {
//     for($j = 1; $j <= $i; $j++)
//     {
//         echo $i." ";
//     }
//     echo "<br>";
// }

// 1
// 2 2
// 3 3 3
// 4 4 4 4
// 5 5 5 5 5




// for($i = 1; $i <= 5; $i++)
// {
//     for($j = 1; $j <= $i; $j++)
//     {
//         echo $j." ";
//     }
//     echo "<br>";
// }

// 1
// 1 2 
// 1 2 3 
// 1 2 3 4
// 1 2 3 4 5


// for($i = 1; $i <= 5; $i++){
//     for($j = 1; $j <= 5; $j++) {
//         echo $j." ";
//     }
//     echo "<br>";
// }

// 1 2 3 4 5 
// 1 2 3 4 5 
// 1 2 3 4 5 
// 1 2 3 4 5 
// 1 2 3 4 5 


// for($i = 1; $i <= 5; $i++){
//     for($j = 1; $j <= 5; $j++) {
//         echo $i." ";
//     }
//     echo "<br>";
// }

// 1 1 1 1 1 
// 2 2 2 2 2
// 3 3 3 3 3
// 4 4 4 4 4
// 5 5 5 5 5



?>

















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- Year
<select name="year">
    <?php
    // for($i = 2023; $i >= 1975; $i--) {
    //     echo "<option>$i</option>";
    // }
    ?>
</select> -->




</body>
</html>
