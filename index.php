<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomeCare</title>
  <!-- Bootstrap Import -->
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/custom-styling.css">
  <link rel="stylesheet" href="./css/glyphicons.css">
  <link rel="stylesheet" href="./css/bootstrap-select.css">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
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
  include('./components/__navbar_home_logged_in.php');
  include('./components/__userChangeDetailsModal.php');
} else if (isset($_SESSION["maid_loggedIn"])) {
  include('./components/__navbar_home_maid_logged_in.php');
  // include a view  bookings modal
} else
{
  include('./components/__navbar_home_logged_out.php');
  include('./components/__userAccessModal.php');
  include('./components/__maidAccessModal.php');
}
?>

<div class="container-fluid shadow">
  <div class="row" style="background-color: #fd7e14">
    <div class="offset-lg-2 offset-md-1 col-lg-4 col-md-5 col-sm-12 col-xs-12">
      <div class="hidden-md-down">
        <span class="headerPaddingSponge"></span>
      </div>
      <h3 class="font-weight-bold">Premiere Maid Service</h3>
      <h4>in Sri Lanka, for Households</h4>
      <p>We are a small start-up aiming to connect people with maids across Sri Lanka to clean your house at a fair price.</p>
    </div>
    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./imgs/homeHeaderCarousel/janitorial-service-in-sri-lanka-dp-3.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./imgs/homeHeaderCarousel/janitorial-service-in-sri-lanka-dp-4.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./imgs/homeHeaderCarousel/janitorial-service-in-sri-lanka-dp-2.png" alt="Third slide">
          </div>
        </div> 
      </div>
    </div>
  </div>
</div>

<div class="container" style="margin-top: 1rem; padding: 1rem 1rem;">
  <!-- Changes whether Guest AND/OR Customer is using the website versus Maid -->
  <?php
  if (!isset($_SESSION['maid_loggedIn'])) {
    include('./components/__maidSearchUI.php');
  } else {
    include('./components/__bookings_maid_UI.php');
  }
  ?>

  <div id="aboutUs" class="bodySection">
    <div class="jumbotron"> <!--  style="height: 600px;" -->
      <h2>About Us</h2>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h5 style="margin-top: 1rem;">What are we?</h5>
          <p>
          HomeCare is an online maid service platform based in Sri Lanka which specializes in providing services to contract reliable and efficient house maids for household activities such as cleaning, washing, maintenance, dare care, preparation of home-made food and other household chores which could be undertaken by house maids.
          </p>
          <p>
          With a considerable workforce, the services we provide are unique to each and every customer’s individual needs. We provide house maids that are specialized in various different types of household chores such as cleaning, preparation of meals, dare care, etc… We also provide multi task housemaids who would be able to undertake all if not most of your house hold activities depending on your requirement.
          </p>
          <p>
          We are proud to say that we are one of the very few online housemaid platforms globally and the only online housemaid platform in the country that provides you with the option to contract housemaids on a short-term basis such as on an hourly rate or on a daily basis.
          </p>
          <p>
          Our goal is to ensure that our customers and our housemaids get the best value addition and satisfaction by obtaining our services.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <h5 style="margin-top: 1rem;">Meet the Team</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 mt-4">
          <div class="card" style="width: 100%; height: 100%;">
            <img src="./imgs/founders/FB_IMG_1494923112507.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="text-orange">Sean Cassiere</h5>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 mt-4">
          <div class="card" style="width: 100%; height: 100%;">
            <img src="./imgs/founders/20200302_100335.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="text-orange">Abdullah Fahim</h5>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 mt-4">
          <div class="card" style="width: 100%; height: 100%;">
            <img src="./imgs/founders/IMG_20190722_003551_635-compressor.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="text-orange">Shabbir Kutbuddin</h5>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 mt-4">
          <div class="card" style="width: 100%; height: 100%;">
            <img src="./imgs/founders/IMG-20161113-WA0019.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="text-orange">Jei Skandarajah</h5>
            </div>
          </div>
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