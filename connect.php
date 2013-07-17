<?php

$mysqli = new mysqli("localhost", "root", "", "mobile");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo 'server msg success';

$data = json_decode($_GET['data']);
$name = $data->firstName;
//echo json_encode($data);
 $query = "INSERT INTO `test`(`name`)VALUES('" . $name . "')";
 $mysqli->query($query);
  
?>