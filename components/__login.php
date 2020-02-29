<?php
require_once('__connect_db.php');

$email = mysqli_real_escape_string($con, strtolower($_POST['validationLoginEmail']));
$password = mysqli_real_escape_string($con, $_POST['validationLoginPassword']);

$sql = "SELECT userId, userEmail, userName, userPassword FROM users WHERE userEmail = '".$email."';";

$query = mysqli_query($con, $sql);

if (!$query) { die('Error: ' . mysqli_error($con)); }

if (mysqli_num_rows($query) > 0) {
  while($row = mysqli_fetch_assoc($query)){
    if ($row['userPassword'] == $password) {
      session_start();
      $_SESSION["customer_loggedIn"] = true;
      $_SESSION["customer_userName"] = $row["userName"];
      $_SESSION["customer_userEmail"] = $row["userEmail"];
      echo "Log In Successful, <a href='./index.php' focus>click here to reload.</a>";
    } else {
      echo "Password is incorrect.";
    }
  }
} else {
  echo "The provided Customer credentials cannot be found in our database.";
}

mysqli_close($con);
?>