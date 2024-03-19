<?php

$data = $_POST;
$data['name'] = strip_tags($data['name']);

print_r($data);

?>