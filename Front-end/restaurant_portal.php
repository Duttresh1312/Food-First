<?php
 session_start();
 $loggedin = false;
 if(isset($_SESSION['loggedin'])){
  $loggedin = true;
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food First</title>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a> -->
          <a>Restaurant Portal</a>
        </div>

        <nav id="navbar" class="navbar">
          <ul class="mx-2">
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="index.php">User Portal</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
            <?php
              if($loggedin){
                echo '<li>
                <a class="getstarted scrollto" id="restaurantlogoutClass" href="">Logout</a>
              </li>';
              }
              else{
                echo '<li>
                <a class="getstarted scrollto" id="restaurantloginclass" href="">Log in</a>
                </li>';
              }
            ?>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <!-- RESTAURANT signup/ login-->


      </div><!-- End Header Container -->
    </div>
  </header>

  <section id="hero" class="d-flex align-items-center">
    <div class="container text-left position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Welcome to <span class="color_o">food first</span></h1>
      <h2>Add Your Restaurants Here<br> Register and get started!!</h2>

      <?php
              if($loggedin){
                echo '';
              }
              else{
                echo '<button type="button" class="btn btn-outline-warning btn-lg">Register
                </button>';
              }
      ?>
      
      <!-- REGISTER FORM  -->
      <div class="modal fade" id="RegisterModal" data-bs-backdrop="static" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark px-4">
                <div class="ms-auto mt-2">
                    <button type="button" class="btn btn-light btn-sm btn-warning rounded-circle border-0"
                        data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x text-25 fw-bold"></i>
                    </button>
                </div>
                <div class="modal-body pt-0">
                  <form id="restaurant-register-form"  enctype="multipart/form-data" method="post">
                        <h1 class="modal-title pb-2" id="exampleModalLabel">Register</h1>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="inputUsername3" placeholder="your name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleFormControlInput3"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
                        </div>
                        <div id="btnClass" class="px-4 text-center mb-4">
                            <button type="button" id="restaurantRegisterClass" class="btn btn-warning outline border-0 rounded-5 px-4 py-2">Register</button>
                        </div>
                  </form> 
                </div>
            </div>
        </div>
      </div>
  </section>

  <section class="pt-4 footer" id="contact">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-4 text_44 color_gr">
          Food First
        </div>
        <div class="col-md-4">
          <div class="d-flex pt-4">
            <button type="button" class="border-0 btn btn-success btn-lg btn-circle mx-1 ms-md-auto">
              <i class="bi bi-facebook"></i>
            </button>
            <button type="button" class="border-0 btn btn-success btn-lg btn-circle mx-1">
              <i class="bi bi-linkedin"></i>
            </button>
            <button type="button" class="border-0 btn btn-success btn-lg btn-circle mx-1">
              <i class="bi bi-twitter"></i>
            </button>
            <button type="button" class="border-0 btn btn-success btn-lg btn-circle mx-1">
              <i class="bi bi-telephone-fill"></i>
            </button>
          </div>
        </div>
      </div>
      <hr class="border border-dark border-1 opacity-50">
      <div class="row pt-4">
        <div class="col-md-6 col-lg-6 px-3 footer-about-us">
          <p class="footer-title color_w">About Us</p>
          <p class="color_w text_18">
           Welcome to our food ordering site! We're passionate about delivering the best possible dining experience to our customers, 
           whether they're ordering online or dining in at one of our restaurants.We provide you with facilities that save you time and 
           ease your hectic schedule. Enjoy any meal of your day with our service.
          </p>
        </div>
        <div class="col-md-6 col-lg-2 Links">
          <p class="footer-title color_w">Useful Links</p>
          <p><a href="">Home</a></p>
          <p><a href="">About Us</a></p>
          <p><a href="">Specials</a></p>
          <p><a href="">Reataurant</a></p>
          <p><a href="">Contact</a></p>
        </div>
      </div>
      <hr class="border border-dark border-1 opacity-50">
      <div class="row py-4">
        <h4 class="mb-0 text-center pb-2 color_w">
          © All rights reserved | Developed by <a href="" class="fw-semibold color_o">our team</a>
        </h4>
      </div>
    </div>
  </section>
  
  <script src="./assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/main.js"></script>
  <script src="handle.js"></script>

</body>