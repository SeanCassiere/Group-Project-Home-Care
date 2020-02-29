<?php
require_once('__connect_db.php');

$location = mysqli_real_escape_string($con, $_POST['findLocation']);
$tasks = $_POST['findSkills'];

$sql_query = "SELECT m.maidID, m.maidName, m.maidProfileImage FROM maid m INNER JOIN skill s ON m.maidID=s.maidId WHERE m.maidAddress LIKE '%";
$sql_query .= $location;
$sql_query .= "%'";
if (in_array("washing", $tasks)) { $sql_query .= " AND (s.washing=1)"; }
if (in_array("cleaning", $tasks)) { $sql_query .= " AND (s.cleaning=1)"; }
if (in_array("cooking", $tasks)) { $sql_query .= " AND (s.cooking=1)"; }
if (in_array("daycare", $tasks)) { $sql_query .= " AND (s.dayCare=1)"; }
if (in_array("gardening", $tasks)) { $sql_query .= " AND (s.gardening=1)"; }
$sql_query .= ";";

$search_tables = mysqli_query($con, $sql_query) or die('Connection Failed: '.mysqli_error($con));

if (mysqli_num_rows($search_tables) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($search_tables)) {
    //echo "ID: ". $row['maidID'] ." - Name: ". $row['maidName'] ."<br>";
    echo "<div class='col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3 mb-3'>";

    echo "<div class='card' style='width: 100%; margin-right: 0.5rem;'>";
    echo "<img class='card-img-top img-responsive' src='./imgs/maids/".$row['maidProfileImage']."' alt='Card image cap' style='height: 217px; width: 100%;'>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>".$row['maidName']."</h5>";
    echo "<p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>";
    echo "<a href='#' class='btn btn-primary stretched-link'>View Profile</a>";
    echo "</div>";
    echo "</div>";

    echo "</div> <!-- Columns -->";
  }
} else {
  echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>";
  echo "<p>Sorry we couldn't find a maid matching your search criteria.</p>";
  echo "</div>";
}

/* DEBUGGING VIEW SQL QUERY
echo $sql_query."<br><br>";
*/

/* View Input Data
echo "location: $location <br><br>";
echo "tasks: <pre>";
print_r($tasks);
echo "</pre><br>";
*/

mysqli_close($con);
?>