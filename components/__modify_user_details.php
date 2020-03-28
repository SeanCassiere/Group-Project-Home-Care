<?php
session_start();
require_once('__connect_db.php');

$args = [];
if ($_POST['newUserName'] != '') { $args['userName'] = $_POST['newUserName']; } else { $args['userName'] = $_POST['oldUserName']; }
if ($_POST['newUserPhone'] != '') { $args['userPhone'] = $_POST['newUserPhone']; } else { $args['userPhone'] = $_POST['oldUserPhone']; }
$args['newPassword'] = $_POST['newUserPassword'];
$args['currentPassword'] = $_POST['oldUserPassword'];

//echo "<pre>"; print_r($args); echo "</pre>";

if ($args['currentPassword']==$_SESSION['customer_userPassword']) {
  $sql = "UPDATE users SET";
  $sql .= " userName='".$args['userName']."',";
  $sql .= " userPhone='".$args['userPhone']."'";
  if ($args['newPassword']!= '') {
    $sql .= ", userPassword='".$args['newPassword']."'";
    $_SESSION['customer_userPassword'] = $args['newPassword'];
  }
  $sql .= " WHERE userId='".$_SESSION['customer_userId']."';";
  $result = mysqli_query($con, $sql);
  if ($result) {
    echo "Updated your details successfully.";
  }
} else {
  echo "Your current password is incorrect, changes not saved.";
}

mysqli_close($con);
?>