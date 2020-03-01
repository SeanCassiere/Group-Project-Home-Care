<?php
$URL_maidId = $_GET['maidId'];
//echo "$URL_maidId";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  echo "<title>Maid Profile</title>";
  ?>
  <!-- Bootstrap Import -->
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/custom-styling.css">
  <link rel="stylesheet" href="./css/glyphicons.css">
  <link rel="stylesheet" href="./css/bootstrap-select.css">
</head>
<body>

<?php
session_start();
// IF Logged In show different navbar
if (isset($_SESSION["customer_loggedIn"])){
  include('./components/__navbar_normal_logged_in.php');
  include('./components/__userChangeDetailsModal.php');
} else if (isset($_SESSION["maid_loggedIn"])) {
  include('./components/__navbar_normal_maid_logged_in.php');
  // include a view  bookings modal
} else
{
  include('./components/__navbar_normal_logged_out.php');
  include('./components/__userAccessModal.php');
  include('./components/__maidAccessModal.php');
}
?>

<div class="container" style="margin-top: 1rem; padding: 1rem 1rem;">
  <!-- Maid Profile Begins -->
  <div class="bodySection">
    <div class="jumbotron" style="height: 600px;">    
      <h2>Maid Profile</h2>
      <pre>Insert Chat-bot here</pre>
    </div>
  </div>

</div> <!-- container -->


<?php include('./components/__footer.php'); ?>

<script src="https://kit.fontawesome.com/900629357e.js" crossorigin="anonymous"></script>
<!-- Bootstrap Import -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/bootstrap-select.js"></script>
<script src="./js/custom-scripting.js"></script>
</body>
</html>