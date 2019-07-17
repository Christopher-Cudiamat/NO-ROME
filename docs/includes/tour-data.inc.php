<?php

include 'conn.inc.php';

$sql = "SELECT * FROM tour";
$result = mysqli_query($conn,$sql);

//STORE IN ARRAY

$data = array();

while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

//CONVERT RESPONE IN JSON

echo json_encode($data);
