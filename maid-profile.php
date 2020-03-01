<?php
// Redirect to Home Page Function
function goHome() { header( "Location: /" ); exit ; }

// DB Connect
require_once('./components/__connect_db.php');

// Capture MaidID
$URL_maidId = mysqli_real_escape_string($con ,$_GET['maidId']);

// IF MaidID not given, go back home.
if (!isset($URL_maidId)) {
  goHome();
}

// SQL Querying
$sql = "SELECT m.*, s.* FROM Maid m INNER JOIN Skill s ON(m.maidID=s.maidId) WHERE (m.maidID=".$URL_maidId.")";
$result = mysqli_query($con, $sql) or die ('Connection failed '.mysqli_error($con));

if (mysqli_num_rows($result) > 0)
{ // Assign valid response into variables
  while ($row = mysqli_fetch_assoc($result))
  {
    $maid_name = $row['maidName'];
    $maid_image = $row['maidProfileImage'];
    $maid_address = $row['maidAddress'];
  }
} else 
{ // Redirect back home
  goHome();
}

mysqli_close($con);
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

<div class="container" style="margin-top: 1rem; padding: 0.5rem 1rem 1rem 1rem">
  <!-- Maid Profile Begins -->
  <div class="bodySection" style="margin-top: -3rem;">
    <div class="jumbotron" style="min-height: 550px;">
      <h2>Maid Profile</h2>

      <div class="row" style="margin-top: 1rem;">
        <div class="offset-lg-1 col-xs-12 col-sm-12 col-md-6 col-lg-5">
          <div class="row">
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="border: 1px solid green;">
              <h5>Name: <?php echo $maid_name; ?></h5>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="border: 1px solid purple;">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime ea magni accusamus. Ut, rerum praesentium aliquid delectus molestiae aut beatae blanditiis! Eveniet odio, nisi atque consectetur suscipit deleniti accusamus praesentium.</p>
            </div>

          </div>
        </div>
        
        <div class="offset-lg-1 col-xs-12 col-sm-12 col-md-6 col-lg-4" style="border: 1px solid red;">
          <div style="position: relative; overflow: hidden; padding-bottom: 100%;">
            <img src="./imgs/maids/<?php echo $maid_image; ?>" class="img-fluid full-width" style="position: absolute; max-width: 100%; max-height: 100%; top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%);">
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil maiores harum minima doloribus nesciunt aut illo, placeat voluptates laborum explicabo deserunt consequuntur cumque. Aliquid unde maiores corrupti magni blanditiis asperiores?</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil maiores harum minima doloribus nesciunt aut illo, placeat voluptates laborum explicabo deserunt consequuntur cumque. Aliquid unde maiores corrupti magni blanditiis asperiores?</p>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil maiores harum minima doloribus nesciunt aut illo, placeat voluptates laborum explicabo deserunt consequuntur cumque. Aliquid unde maiores corrupti magni blanditiis asperiores?</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil maiores harum minima doloribus nesciunt aut illo, placeat voluptates laborum explicabo deserunt consequuntur cumque. Aliquid unde maiores corrupti magni blanditiis asperiores?</p>
        </div>
      </div>

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