<?php
require_once('__connect_db.php');

$email = mysqli_real_escape_string($con, strtolower($_POST['maidLoginEmail']));
$password = mysqli_real_escape_string($con, $_POST['maidLoginPassword']);

$sql = "SELECT maidID, maidEmail, maidName, maidPassword FROM maid WHERE maidEmail = '".$email."';";

$query = mysqli_query($con, $sql);

if (!$query) { die('Error: ' . mysqli_error($con)); }

if (mysqli_num_rows($query) > 0) {
  while($row = mysqli_fetch_assoc($query)){
    if ($row['maidPassword'] == $password) {
      session_start();
      $_SESSION["maid_loggedIn"] = true;
      $_SESSION["maid_userName"] = $row["maidName"];
      $_SESSION["maid_userEmail"] = $row["maidEmail"];
      echo "Log In Successful, <a href='./index.php' focus>click here to reload.</a>";
    } else {
      echo "Password is incorrect.";
    }
  }
} else {
  echo "The provided Maid credentials cannot be found in our database.";
}

mysqli_close($con);
?>