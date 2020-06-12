<nav class="navbar navbar-expand-xl navbar-light sticky-top shadow" style="background-color: #fd7e14">
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
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item nav-link"><hr class="border-top" style="border-top: 1px solid rgba(0,0,0,0.1) !important; color: black;"></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Customer Login / Register
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalLRForm">Login/Register</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarMaidDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Maid Login/Register
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarMaidDropdownMenuLink">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalLMaidRForm">Login/Register</a>
        </div>
      </li>
    </ul>
  </div>
</nav>