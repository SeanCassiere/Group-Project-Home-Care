<?php
require_once('__connect_db.php');


$images = array("default.png","1.jpg","2.jpg","3.jpg");
for ($i=0; $i<10; $i++) {
  $temp = rand(0,3);
  echo "<div class='col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3 mb-3'>";
  echo "<div class='card' style='width: 100%; margin-right: 0.5rem;'>";
  echo "<img class='card-img-top img-responsive' src='./imgs/maids/".$images[$temp]."' alt='Card image cap' style='height: 217px; width: 100%;'>";
  echo "<div class='card-body'>";
  echo "<h5 class='card-title'>Card with stretched link</h5>";
  echo "<p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>";
  echo "<a href='#' class='btn btn-primary stretched-link'>View Profile</a>";
  echo "</div>";
  echo "</div>";
  echo "</div> <!-- Columns -->";
}

mysqli_close($con);
?>
<!--
<html>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./imgs/maids/new-1.jpg" alt="Card image cap">

  <div class="card-body">
    <h5 class="card-title">Card with stretched link</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
      content.</p>
    <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
  </div>
</div>
</html>
-->