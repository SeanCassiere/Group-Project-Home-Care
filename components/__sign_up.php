<?php
require_once('__connect_db.php');

$name = mysqli_real_escape_string($con, $_POST['validationSignUpName']);
$email = mysqli_real_escape_string($con, strtolower($_POST['validationSignUpEmail']));
$phone = mysqli_real_escape_string($con, $_POST['validationSignUpPhone']);
$password = mysqli_real_escape_string($con, $_POST['validationSignUpPassword']);

$query = "INSERT INTO users (userName, userEmail, userPassword, userPhone) values ('$name','$email','$password','$phone')";
$sqlInject = mysqli_query($con, $query);
	
if(mysqli_errno($con) == 0){
	echo "Success!";
} else if (mysqli_errno($con) == 1062){
	echo "Email or Phone number is already in-use.";
}

mysqli_close($con);

?>