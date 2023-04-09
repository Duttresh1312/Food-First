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
                <a class="getstarted scrollto" id="restaurantloginclass" data-bs-toggle="modal" data-bs-target="#RestaurantLoginModal" href="">Log in</a>
                </li>';
              }
            ?>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <!-- RESTAURANT signup/ login-->
        <div class="modal fade" id="RestaurantLoginModal" data-bs-backdrop="static" tabindex="-1"
          aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark px-4">
              <div class="ms-auto mt-2">
                <button type="button" class="btn btn-light btn-sm btn-warning rounded-circle border-0"
                  data-bs-dismiss="modal" aria-label="Close">
                  <i class="bi bi-x text-25 fw-bold"></i>
                </button>
              </div>
              <form id="login-form" method="post">
                <h1 class="modal-title pb-2" id="exampleModalLabel">Login</h1>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"
                    name="email" required>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword1" name="password" placeholder="Password"
                    required>
                </div>
                <div class="px-4 text-center mb-4">
                  <button type="submit" id="loginClass"
                    class="btn btn-warning outline border-0 rounded-5 px-4 py-2">Login</button>
                </div>
              </form>
            </div>
          </div><!-- End Header Container -->
        </div>
  </header>

  <section id="hero" class="d-flex align-items-center">
    <div class="container text-left position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Welcome to <span class="color_o">food first</span></h1>
      <h2>Add Your Restaurants Here<br> Register and get started!!</h2>

      <button type="button" class="btn btn-outline-warning btn-lg" data-bs-toggle="modal"
        data-bs-target="#RestaurantRegisterModal">Register
      </button>

      <!-- REGISTER FORM  -->
      <div class="modal fade" id="RestaurantRegisterModal" data-bs-backdrop="static" tabindex="-1"
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
              <!-- Restaurant form goes here -->
              <form id="restaurant-register-form" enctype="multipart/form-data" method="post">
                <h3 class="modal-title pb-2" id="exampleModalLabel">Restaurant Registration</h3>
                <div class="mb-3">
                  <label for="restaurantName">Restaurant Name</label>
                  <input type="text" class="form-control" id="restaurantName" placeholder="Enter restaurant name"
                    required>
                </div>
                <div class="mb-3">
                  <label for="restaurantEmail">Restaurant Email</label>
                  <input type="email" class="form-control" id="restaurantEmail" placeholder="Enter restaurant Email Id"
                    required>
                </div>
                <div class="mb-3">
                  <label for="restaurantEmail">Restaurant password</label>
                  <input type="password" class="form-control" id="restaurantPassword"
                    placeholder="Enter restaurant Password" required>
                </div>
                <div class="mb-3">
                  <label for="restaurantContact">Restaurant Contact Details</label>
                  <input type="text" class="form-control" id="restaurantContact"
                    placeholder="Enter restaurant Contact Details" required>
                </div>
                <div class="mb-3">
                  <label for="restaurantAddress">Restaurant Address</label>
                  <textarea type="text" class="form-control" id="restaurantAddress"
                    placeholder="Enter restaurant address" required></textarea>
                </div>
                <div class="mb-3">
                  <label for="restaurantGSTIN">GST Number</label>
                  <input type="text" class="form-control" id="restaurantGSTIN" placeholder="Enter restaurant gst"
                    required></input>
                </div>
                <div class="mb-3">
                  <label for="restaurantTiming">Restaurant Timing:</label></br>
                  <label for="restaurantTiming">From</label>
                  <input type="time" class="form-control" id="restaurantTiming1"
                    placeholder="Enter restaurant timing information" required>
                  <label for="restaurantTiming">To</label>
                  <input type="time" class="form-control" id="restaurantTiming2"
                    placeholder="Enter restaurant timing information" required>
                </div>
                <div id="btnClass" class="px-4 text-center mb-4">
                  <button type="button" id="restaurantRegisterClass"
                    class="btn btn-warning outline border-0 rounded-5 px-4 py-2">Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </section>

  <section class="container-fluid py-4 d-md-block d-flex menu" id="menu-res">
    <?php
              if($loggedin){
                echo '<div class="container py-4">
                  <h1 class="color_o fw-bold">Add Your Food Menu</h1>
                  <p class="text-o">RESTAURANT MENU</p>
                  <button class="ms-auto me-auto btn btn-lg bg_orange text-white" data-bs-target="#RestaurantMenuModal" data-bs-toggle="modal">Add / Edit Menus</button>
                </div>';
              }
              else{
                echo '<div class="container py-4">
                  <h1 class="color_o fw-bold">Add Your Food Menu</h1>
                  <p class="text-o">RESTAURANT MENU</p>
                  <button class="ms-auto me-auto btn btn-lg bg_orange text-white" data-bs-target="#RestaurantMenuModal" data-bs-toggle="modal">Add / Edit Menus</button>
                  <p class="text-o">Register First</p>
                </div>';
              }
      ?>

    <div class="modal fade" id="RestaurantMenuModal" data-bs-backdrop="static" tabindex="-1"
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
            <h3 class="modal-title pb-2" id="exampleModalLabel">Add Category</h3>
            <div class="mb-3">
              <label for="chooseRestaurant">Select Your Restaurant</label>
              <select class="form-select btn btn-lg bg_orange text-black" aria-label="exampleSelectMenu">
                <option selected>Choose Your Restaurant</option>
                <option value="dhakamukki">Dhaka Mukki</option>
                <option value="kingsman">KingsMan</option>
              </select>
            </div>
            <div class="mb-3">
              <div class="form-group">
                <label for="select-multiple">Select Category:</label>
                <select class="form-control" id="select-multiple" multiple>
                  <option value="Gujarati">Gujarati</option>
                  <option value="Punjabi">Punjabi</option>
                  <option value="South Indian">South Indian</option>
                  <option value="Chinese">Chinese</option>
                </select>
                <label for="add-category">Add Category:</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="add-category" placeholder="Enter Category name...">
                  <button class="ms-auto me-auto btn bg_orange text-white" id="add-category-btn">Add</button>
                </div>
              </div>
            </div>
            <div class="mb-3">
              <button class="d-grid gap-2 col-6 mx-auto btn bg_orange text-white" id="category-submit-btn"
                data-bs-toggle="modal" data-bs-target="#AddItemModal">Next</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="AddItemModal" data-bs-backdrop="static" tabindex="-1"
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
            <h3 class="modal-title pb-2" id="exampleModalLabel">Add Food Items</h3>
            <div class="mb-3">
              <label for="chooseRestaurant">Select Your Category</label>
              <select class="form-select btn btn-lg bg_orange text-black" aria-label="exampleSelectMenu">
                <option selected>Choose Your Category</option>
                <option value="gujrati">Gujrati</option>
                <option value="punjabi">Punjabi</option>
                <option value="chinese">Chinese</option>
                <option value="southIndian">South Indian</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="foodName" class="form-label">Food Name</label>
              <input type="text" class="form-control" id="foodName" name="foodName" placeholder="Enter food name here"
                required>
            </div>
            <div class="mb-3">
              <label for="foodDescription" class="form-label">Food Description</label>
              <textarea class="form-control" id="foodDescription" name="foodDescription" rows="3"
                placeholder="Enter food description"></textarea>
            </div>
            <div class="mb-3">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked" style="margin-left: 10px; margin-top: 7px;">Food Avaliability</label>
              </div>
            </div>
            <div class="mb-3 d-md-flex">
              <button class="ms-auto me-auto btn bg_orange text-white" id="item-prev-btn" data-bs-toggle="modal" data-bs-target="#RestaurantMenuModal">Prev</button>
              <button class="ms-auto me-auto btn bg_orange text-white" id="item-submit-btn">Submit</button>
            </div>
          </div>
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
            Welcome to our food ordering site! We're passionate about delivering the best possible dining experience to
            our customers,
            whether they're ordering online or dining in at one of our restaurants.We provide you with facilities that
            save you time and
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

  <script src="/Front-end/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="/Front-end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/Front-end/assets/js/main.js"></script>
  <script src="handle.js"></script>
</body>