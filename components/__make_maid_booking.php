<?php
require('__connect_db.php');
$maidId = $_POST['maidId'];
$date = $_POST['date'];
$userId = $_POST['userId'];

$sql = "INSERT INTO booking (bookingDate, maidId, userId)";
$sql .= " VALUES ('";
$sql .= $date."', '";
$sql .= $maidId."', '";
$sql .= $userId;
$sql .= "');";

$result = mysqli_query($con, $sql);

if ($result) {
  echo "Your booking was made successfully.";
} else {
  echo "There was an error, ".mysqli_error($result);
}

mysqli_close($con);
?>