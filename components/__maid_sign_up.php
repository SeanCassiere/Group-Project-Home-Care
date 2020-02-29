<?php
require_once('__connect_db.php');

$name = mysqli_real_escape_string($con, $_POST['maidSignupName']);
$email = mysqli_real_escape_string($con, strtolower($_POST['maidSignupEmail']));
$phone = mysqli_real_escape_string($con, $_POST['maidSignupPhone']);
$password = mysqli_real_escape_string($con, $_POST['maidSignupPassword']);
$nic = mysqli_real_escape_string($con, $_POST['maidSignupNIC']);
$skills = $_POST['maidSignupSkills'];
$workStatus = mysqli_real_escape_string($con, $_POST['maidPartFullTime']);
$address = mysqli_real_escape_string($con, $_POST['maidAddress']);
$otherSkills = mysqli_real_escape_string($con, $_POST['maidSignupOtherSkills']);

//Building maid INSERT STATEMENT
$query = "INSERT INTO maid (maidName, maidAddress, maidNIC, maidContactNumber, maidEmail, maidPassword, ptServiceAvailability, ftServiceAvailability) VALUES ('$name','$address','$nic','$phone','$email','$password',";
if ($workStatus=="pt") {
	$query .= "1, 0); ";
} else {
	$query .= "0, 1); ";
}

// INSERT Record Begins
$sql_Inject = mysqli_query($con, $query);

if (mysqli_errno($con) == 0) {
	$returnPrimaryKey = mysqli_insert_id($con);
	// INSERT into SAME skill TABLE
	$skills_query = "INSERT INTO skill (maidId, washing, cleaning, cooking, dayCare, gardening";
	if (strlen($otherSkills) > 1) { $skills_query .= ",otherSkills"; }
	$skills_query .= ") VALUES ($returnPrimaryKey";
	// Skills Sorting
	if (in_array("washing", $skills)) { $skills_query .= ", 1"; } else { $skills_query .= ", 0"; }
	if (in_array("cleaning", $skills)) { $skills_query .= ", 1"; } else { $skills_query .= ", 0"; }
	if (in_array("cooking", $skills)) { $skills_query .= ", 1"; } else { $skills_query .= ", 0"; }
	if (in_array("daycare", $skills)) { $skills_query .= ", 1"; } else { $skills_query .= ", 0"; }
	if (in_array("gardening", $skills)) { $skills_query .= ", 1"; } else { $skills_query .= ", 0"; }
	if (strlen($otherSkills) > 1) { $skills_query .= ", '$otherSkills'"; }
	$skills_query .= ");";
	$sql_skills_inject = mysqli_query($con, $skills_query);					// Skills Connect and Insert
	if (mysqli_errno($con) == 0) { echo "You have successfully been registered as a Maid."; } else { echo "There was error during registration."; }

} else if (mysqli_errno($con) == 1062) { echo "This email is already in use";} else { echo "There has been an unexpected error. Please contact the administrator";}

mysqli_close($con);

/* DEBUGGING: VIEW SQL STATEMENTS
echo "SQL Maid Insert Query: $query <br>";
echo "SQL Skills Insert Query: $skills_query <br>";
*/

/* Debugging View All Entries
echo "Name: $name <br>";
echo "Email: $email <br>";
echo "Phone: $phone <br>";
echo "Password: $password<br>";
echo "NIC: $nic<br>";
echo "Skills: <pre>";
print_r($skills); 
echo"</pre><br>";
echo "Work Status: $workStatus<br>";
echo "Address: $address<br>";
echo "Other Skills: $otherSkills<br><br>";

if (strlen($otherSkills)) {
	echo "Other Skills Isset";
}

echo "<br><br>";
*/

?>