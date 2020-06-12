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
$sql = "SELECT m.*, s.* FROM maid m INNER JOIN skill s ON(m.maidID=s.maidId) WHERE (m.maidID=".$URL_maidId.")";
$result = mysqli_query($con, $sql) or die ('Connection failed '.mysqli_error($con));

if (mysqli_num_rows($result) > 0)
{ // Assign valid response into variables
  while ($row = mysqli_fetch_assoc($result))
  {
    $maid_name = $row['maidName'];
    $maid_image = $row['maidProfileImage'];
    $maid_address = $row['maidAddress'];
    $maid_dob = $row['maidDOB'];
    $maid_dailyRate = $row['maidServiceDailyRate'];
    $maid_securityVerify = $row['maidSecurityDetails'];
    $maid_washing = $row['washing'];
    $maid_cleaning = $row['cleaning'];
    $maid_cooking = $row['cooking'];
    $maid_dayCare = $row['dayCare'];
    $maid_gardening = $row['gardening'];
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
  echo "<title>Maid Profile: $maid_name</title>";
  ?>
  <!-- Bootstrap Import -->
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/custom-styling.css">
  <link rel="stylesheet" href="./css/glyphicons.css">
  <link rel="stylesheet" href="./css/bootstrap-select.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-6NC71XVJSM"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-6NC71XVJSM');
  </script>
</head>
<body>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
  FB.init({
    xfbml            : true,
    version          : 'v6.0'
  });
};

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=install_email
  page_id="111823250421038"
  theme_color="#ff7e29"
    logged_in_greeting="Welcome to HomeCare! How could I help you today?"
    logged_out_greeting="Welcome to HomeCare! How could I help you today?">
</div>

<?php
session_start();
// IF Logged In show different navbar
if (isset($_SESSION["customer_loggedIn"])){
  include('./components/__navbar_normal_logged_in.php');
  include('./components/__userChangeDetailsModal.php');
} else if (isset($_SESSION["maid_loggedIn"])) {
  include('./components/__navbar_normal_maid_logged_in.php');
} else
{
  include('./components/__navbar_normal_logged_out.php');
  include('./components/__userAccessModal.php');
  include('./components/__maidAccessModal.php');
}
?>

<div class="container" style="margin-top: 1rem; padding: 0.5rem 1rem 1rem 1rem">
  <!-- Maid Profile Begins -->
  <div class="bodySection" style="margin-top: -2rem;">
    <div class="jumbotron" style="margin-bottom: -3rem;">
      <h2>Maid Profile</h2>
      <div class="row" style="margin-top: 2rem;">
        <div class="offset-lg-1 col-xs-12 col-sm-12 col-md-6 col-lg-4">
          <img src="./imgs/maids/<?php echo $maid_image; ?>" class="img-fluid mx-auto d-block">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mt-4 mt-md-0 mt-lg-0">
          <div class="row">
            <div class="offset-1 offset-sm-1 offset-md-0 offset-lg-0 col-xs-10 col-sm-10 col-md-12 col-lg-12 mt-2 mt-1">
              <h6>Name: <?php echo $maid_name; ?></h6>
            </div>
            <div class="offset-1 offset-sm-1 offset-md-0 offset-lg-0 col-xs-10 col-sm-10 col-md-12 col-lg-12 mt-2 mt-1">
              <h6>Date of Birth: <?php echo $maid_dob; ?></h6>
            </div>
            <div class="offset-1 offset-sm-1 offset-md-0 offset-lg-0 col-xs-10 col-sm-10 col-md-12 col-lg-12 mt-2 mt-1">
              <h6>Daily Rate: <span class="text-danger">Rs. <?php echo $maid_dailyRate; ?></span></h6>
            </div>
            <div class="offset-1 offset-sm-1 offset-md-0 offset-lg-0 col-xs-10 col-sm-10 col-md-12 col-lg-12 mt-2 mt-1">
              <h6>Security Verification: 
              <?php
                if ($maid_securityVerify==1) {
                  echo "<i class='fas fa-user-check fa-lg text-success'></i>";
                } else {
                  echo "<i class='fas fa-user-slash fa-lg text-danger'></i>";
                }
              ?>
              </h6>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2 mt-1">
              <div class="text-center text-sm-center text-md-left text-lg-left mt-2 ml-2">
                <?php
                if (isset($_SESSION["customer_loggedIn"])) {
                  echo "<form id='makeBooking' action='./components/__make_maid_booking.php' method='POST'>";
                  echo "<input type='text' value='".$_GET['maidId']."' name='maidId' hidden readonly>";
                  echo "<input type='text' value='".$_GET['startDate']."' name='date' hidden readonly>";
                  echo "<input type='text' value='".$_SESSION['customer_userId']."' name='userId' hidden readonly>";
                  echo "<button type='submit' class='btn btn-primary btn-lg'>BOOK NOW</button>";
                  echo "</form>";
                } else {
                  echo "To make a booking you need to be logged in.";
                }
                ?>
                <p id="makeBookingStatus"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bodySection">
      <div class="jumbotron">
        <h3>Skills</h3>
        <p>The skills and tasks that <?php echo $maid_name; ?> can do.</p>
        <div class="row">
          <?php
          if ($maid_washing==1) {
            echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 py-2'>";
            echo "<hr><h6 class='text-orange ml-2'>Washing</h6>";
            echo "<p>The Washing service provided by our housemaids would include washing clothes, drying them and neatly fold the clothes once they are dried. It would also include ironing certain dresses if required.</p>";
            echo "</div>";
          }
          if ($maid_cleaning==1) {
            echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 py-2'>";
            echo "<hr><h6 class='text-orange ml-2'>Cleaning</h6>";
            echo "<p>The Cleaning service provided by our housemaids would include sweeping and mopping the house to keep it clean and tidy. It would also include other cleaning services such as dusting and keeping different things in the house clean and kept in their proper places.</p>";
            echo "</div>";
          }
          if ($maid_cooking==1) {
            echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 py-2'>";
            echo "<hr><h6 class='text-orange ml-2'>Cooking</h6>";
            echo "<p>The Cooking service provided by our housemaids would include preparing various dishes of curry, cooking rice/other meals and other SriLankan cuisine delicacies which the maid have experience in preparing. The maid could also be booked as an assistant to help in cooking daily meals or other dishes.</p>";
            echo "</div>";
          }
          if ($maid_dayCare==1) {
            echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 py-2'>";
            echo "<hr><h6 class='text-orange ml-2'>Day Care</h6>";
            echo "<p>The DayCare service provided by our housemaids would include taking care of small kids when their parents are away from home and if there is no one to attend to the little kids. The maid would be able to ensure that the little kids left under the observation of the maid are safe and would also be able to ensure that the little kids would have their meals on time and would be able to wash and clean little infants and ensure that they are well attended.</p>";
            echo "</div>";
          }
          if ($maid_gardening==1) {
            echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 py-2'>";
            echo "<hr><h6 class='text-orange ml-2'>Gardening</h6>";
            echo "<p>The Gardening service provided by our housemaids would mean that the maid would be able to work in the garden, growing and taking care of the plants and keeping it attractive. The maid would be able to clean and keep the garden neat and tidy as well.</p>";
            echo "</div>";
          }
          ?>
        </div>
      </div>
    </div>
  </div>

</div> <!-- container -->


<?php include('./components/__footer.php'); ?>

<script src="https://kit.fontawesome.com/900629357e.js" crossorigin="anonymous"></script>
<!-- Bootstrap Import -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/bootstrap-select.js"></script>
<script src="./js/custom-scripting.js"></script>
</body>
</html>