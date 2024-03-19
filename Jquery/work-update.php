<?php
include_once('config-work.php');

$data = $_POST;

// echo "<pre>";
// print_r($data);

$id = $data['id'];
$pname = $data['pname'];
$assign = $data['assign'];
$start = $data['start'];
$end = $data['end'];
$priority = $data['priority'];
$description = $data['description'];

// echo $id;
// echo $pname;



if ($pname && $assign && $end) {
    
    $updQuery = "UPDATE `works` SET pname='$pname', assign='$assign', start='$start', end='$end', priority='$priority', description='$description' WHERE id='$id'";

    // echo $updQuery;
    // die;
    $con->query($updQuery);

    $_SESSION['updated'] = "Data updated successfully";
    
    header("location: work-list.php");

} else{
    header("location: work-list.php");
}
?>