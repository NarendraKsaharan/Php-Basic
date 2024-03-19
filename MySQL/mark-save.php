<?php
include_once('configmrk.php');

$data = $_POST;

$name = $data['name'];
$hindi = $data['hindi'];
$english = $data['english'];
$chemistry = $data['chemistry'];
$physics = $data['physics'];
$maths = $data['maths'];
$total = $data['total'];
$obt = $data['obt'];
$per = $data['per'];
$grade = $data['grade'];

try {
    if ($name) {
        $inQuery = "INSERT INTO `marks` (`name`, `hindi`, `english`, `chemistry`, `physics`,
         `maths`, `total`, `obt`, `per`, `grade`) VALUES ('$name', $hindi, $english,
          $chemistry, $physics, $maths, $total, $obt, '$per', $grade)";

          $con->query($inQuery);

          $_SESSION['success'] = "Marks add Successfully....";
    } else {
        $_SESSION['error'] = "error_code 295.....";
    } 
    header("location: mark-list.php");

} catch (Exception $e) {
    echo $e->getMessage();
    die();
}


?>