<?php
include_once('config-work.php');

$data = $_POST;

// echo "<pre>";
// print_r($data);

$pname = $data['pname'];
$assign = $data['assign'];
$start = $data['start'];
$end = $data['end'];
$priority = $data['priority'];
$description = $data['description'];

// echo $pname;
// echo $start;
//echo $assign;

if ($pname && $start && $end && $priority) {
    
    $inQuery = "INSERT INTO `works`(`pname`, `assign`, `start`, `end`, `priority`, `description`) VALUES ('$pname', '$assign', '$start', '$end', '$priority', '$description')";

    // echo $inQuery;
    // die;

    $con->query($inQuery);

    $_SESSION['success'] = "Data inserted successfully...";

} else {
    $_SESSION['error'] = "Somthing went wrong...";
}
header("location: work-list.php");




?>