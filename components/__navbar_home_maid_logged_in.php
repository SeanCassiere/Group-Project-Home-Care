<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #fd7e14">
  <a class="navbar-brand" href="./index.php">
    <img src="./imgs/bootstrap-solid.svg" height="30" alt="" class="d-inline-block algin-top">
    HomeCare
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link active" href="./index.php">Home <span class="sr-only">(current)</span></a></li>
      <li class="nav-item"><a class="nav-link" href="#findAMaid">Find a Maid</a></li>
      <li class="nav-item"><a class="nav-link" href="#chatWithUs">Chat with Us</a></li>
      <li class="nav-item"><a class="nav-link" href="#aboutUs">About Us</a></li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item nav-link"><hr class="border-top" style="border-top: 1px solid rgba(0,0,0,0.1) !important; color: black;"></li>
      <li class="nav-item nav-link">
      <?php
        echo "Hi, ".$_SESSION["maid_userName"];
      ?>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account Settings
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target=".bd-example-modal-lg">View Bookings</a>
          <a class="dropdown-item" href="logout.php">Log Out</a>
        </div>
      </li>
    </ul>
  </div>
</nav>