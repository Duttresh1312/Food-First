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
          <a href="index.php">FOOD FIRST</a>
        </div>

        <nav id="navbar" class="navbar">
          <ul class="mx-2">
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#menu-user">Restaurant</a></li>
            <li><a class="nav-link scrollto" href="#about-us">About</a></li>
            <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <?php
              if($loggedin){
                echo '<li>
                <a class="getstarted scrollto" id="logoutClass" href="">Logout</a>
              </li>';
              }
              else{
                echo '<li class="dropdown">
                        <a class="getstarted scrollto dropdown-toggle" href="">Login</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item fs-5 fw-bold" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">As User</a></li>
                          <li><a class="dropdown-item fs-5 fw-bold" href="restaurant_portal.php">As Restaurant</a></li>
                        </ul>
                      </li>';
              }
            ?>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <!-- USER signup/ login-->
        <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1"
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
                    <form id="login-form" method="post">
                        <h1 class="modal-title pb-2" id="exampleModalLabel">Login</h1>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label" >Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword1" name="password" placeholder="Password" required>
                        </div>
                        <div>
                            <p>Don't have an account? <a href="" id="signup-link">Sign up</a></p>
                        </div>
                        <div class="px-4 text-center mb-4">
                            <button type="submit" id="loginClass" class="btn btn-warning outline border-0 rounded-5 px-4 py-2">Login</button>
                        </div>
                    </form>

                    <form id="signup-form" method="post">
                        <h1 class="modal-title pb-2" id="exampleModalLabel">Sign Up</h1>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="inputUsername2" placeholder="your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleFormControlInput2"
                                placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="inputPassword2" placeholder="Password" required>
                        </div>
                        <div>
                            <p>Already have an account? <a href="" id="login-link">Login</a></p>
                        </div>
                        <div id="btnClass" class="px-4 text-center mb-4">
                            <button type="submit" id="signupClass" class="btn btn-warning outline border-0 rounded-5 px-4 py-2">Signup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <!-- RESTAURANT signup/ login-->
      </div><!-- End Header Container -->
    </div>
  </header>

  <section id="hero" class="d-flex align-items-center">
    <div class="container text-left position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Welcome to <span class="color_o">food first</span></h1>
      <h2>Find Restaurants, Specials and Offers for free.<br> your Food from your favorite hotels & restaurants</h2>

      <?php
              if($loggedin){
                echo '';
              }
              else{
                echo '<div class="dropdown-center">
                  <button type="button" class="btn btn-outline-warning btn-lg"  href="" data-bs-toggle="modal" data-bs-target="#RegisterModal" id="register-user">Register As user</button>
                  <a href="restaurant_portal.html"><button type="button" class="btn btn-outline-warning btn-lg">Register As Restaurant</button></a>
              </div>';
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
                  <form id="register-form"  enctype="multipart/form-data" method="post">
                        <h1 class="modal-title pb-2" id="exampleModalLabel">Register</h1>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="inputUsername3" placeholder="your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleFormControlInput3"
                                placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password" required>
                        </div>
                        <div id="btnClass" class="px-4 text-center mb-4">
                            <button type="submit" id="registerClass" class="btn btn-warning outline border-0 rounded-5 px-4 py-2">Register</button>
                        </div>
                  </form> 
                </div>
            </div>
        </div>
      </div>
  </section>

  <!---------Menu--------->
  <section class="container-fluid py-4 d-md-block d-flex menu" id="menu-user">
      <div class="container py-4">
        <h1 class="color_o fw-bold">Find Your Food</h1>
        <p class="text-o">FEATURED RESTAURANT MENU</p>
        <div class="dropdown-center">
          <a class="ms-auto me-auto btn btn-lg bg_orange text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Select Restaurant</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item fs-5 fw-bold" href="" data-bs-toggle="collapse" data-bs-target="#dhaka-mukki" type="button" aria-expanded="false">Dhaka Mukki</a></li>
              <li><a class="dropdown-item fs-5 fw-bold" href="" data-bs-toggle="collapse" data-bs-target="#kingsman" type="button" aria-expanded="false">Kingsman</a></li>
            </ul>
        </div>
      </div>

      <!--------Restaurant Menu to user--------->
      <div class="collapse" id="dhaka-mukki">
      <div class="row">
        <div class="col-md-6 col-lg-2 py-2">
          <div id="list-example" class="list-group red_menu">
            <ul class="nav flex-column nav-pills py-4 text-center">
              <li class="nav-item px-2 pb-2">
                <a class="nav-link active" href="#list-item-2">Bhaji Pav</a>
              </li>
              <li class="nav-item px-2 pb-2">
                <a class="nav-link" href="#list-item-3">Sandwich</a>
              </li>
              <li class="nav-item px-2 pb-2">
                <a class="nav-link" href="#list-item-4">Pizza</a>
              </li>
              <li class="nav-item px-2 pb-2">
                <a class="nav-link" href="#list-item-5">Pulav</a>
              </li>
              <li class="nav-item px-2 pb-2">
                <a class="nav-link" href="#list-item-6">Sides</a>
              </li>
              <li class="nav-item px-2 pb-2">
                <a class="nav-link" href="#list-item-7">Bombay Chaat</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 py-2">
          <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example px-2" tabindex="0">
            <div id="list-item-2">
              <p class="text_25 my-3 fw-semibold">Bhaji Pav</p>
              <div class="card rounded-4 my-3 py-2 px-3 shadow border_none" id="card-list" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row">
                  <div class="col-md-4 my-auto text-center">
                    <img src="./assets/img/Cheese Bhaji Pav.png" class="img-fluid rounded-4 alt="...">
                  </div>
                  <div class="col-md-8 py-1 d-flex align-items-start flex-column">
                    <p class="color_g text_22 mb-0">Boiled Bhaji Pav</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices served with pav(bread)</p>
                    <h5 class="color_r mt-auto">$18.50</h5>
                    <button class="mt-2 border-0 text_18 rounded text-white add-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
                  </div>
                </div>
              </div>
              <div class="card rounded-4 my-3 py-2 px-3 shadow border_none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row">
                  <div class="col-md-4 my-auto text-center">
                    <img src="./assets/img/Boiled Bhaji Pav.png" class="img-fluid rounded-4" alt="...">
                  </div>
                  <div class="col-md-8 py-1 d-flex align-items-start flex-column">
                    <p class="color_g text_22 mb-0">Steamed Bhaji Pav</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices served with pav(bread)</p>
                    <h5 class="color_r mt-auto">$18.50</h5>
                    <button class="mt-2 border-0 text_18 rounded text-white add-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
                  </div>
                </div>
              </div>
              <div class="card rounded-4 my-3 py-2 px-3 shadow border_none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row">
                  <div class="col-md-4 my-auto text-center">
                    <img src="./assets/img/Honest Sp Bhaji Pav.png" class="img-fluid rounded-4" alt="...">
                  </div>
                  <div class="col-md-8 py-1 d-flex align-items-start flex-column">
                    <p class="color_g text_22 mb-0">Honest sp. Bhaji Pav</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices served with pav(bread)</p>
                    <h5 class="color_r mt-auto">$18.50</h5>
                    <button class="mt-2 border-0 text_18 rounded text-white add-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
                  </div>
                </div>
              </div>
            </div>

            <div id="list-item-3">
              <p class="text_25 my-3 fw-semibold">Sandwich</p>
              <div class="card rounded-4 my-3 py-2 px-3 shadow border_none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row">
                  <div class="col-md-4 my-auto text-center">
                    <img src="./assets/img/Honest Sp Bhaji Pav.png" class="img-fluid rounded-4" alt="...">
                  </div>
                  <div class="col-md-8 py-1 d-flex align-items-start flex-column">
                    <p class="color_g text_22 mb-0">Sandwich</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices served with pav(bread)</p>
                    <h5 class="color_r mt-auto">$18.50</h5>
                    <button class="mt-2 border-0 text_18 rounded text-white add-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
                  </div>
                </div>
              </div>
  
              <div class="card rounded-4 my-3 py-2 px-3 shadow border_none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row">
                  <div class="col-md-4 my-auto text-center">
                    <img src="./assets/img/Honest Sp Bhaji Pav.png" class="img-fluid rounded-4" alt="...">
                  </div>
                  <div class="col-md-8 py-1 d-flex align-items-start flex-column">
                    <p class="color_g text_22 mb-0">Sandwich</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices served with pav(bread)</p>
                    <h5 class="color_r mt-auto">$18.50</h5>
                    <button class="mt-2 border-0 text_18 rounded text-white add-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
                  </div>
                </div>
              </div>
            </div>
  
            <div id="list-item-4">
              <p class="text_25 my-3 fw-semibold">Pizza</p>
              <div class="card rounded-4 my-3 py-2 px-3 shadow border_none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row">
                  <div class="col-md-4 my-auto text-center">
                    <img src="./assets/img/Honest Sp Bhaji Pav.png" class="img-fluid rounded-4" alt="...">
                  </div>
                  <div class="col-md-8 py-1 d-flex align-items-start flex-column">
                    <p class="color_g text_22 mb-0">Pizza</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices served with pav(bread)</p>
                    <h5 class="color_r mt-auto">$18.50</h5>
                    <button class="mt-2 border-0 text_18 rounded text-white add-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
                  </div>
                </div>
              </div>
              <div class="card rounded-4 my-3 py-2 px-3 shadow border_none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row">
                  <div class="col-md-4 my-auto text-center">
                    <img src="./assets/img/Honest Sp Bhaji Pav.png" class="img-fluid rounded-4" alt="...">
                  </div>
                  <div class="col-md-8 py-1 d-flex align-items-start flex-column">
                    <p class="color_g text_22 mb-0">Pizza</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices served with pav(bread)</p>
                    <h5 class="color_r mt-auto">$18.50</h5>
                    <button class="mt-2 border-0 text_18 rounded text-white add-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
                  </div>
                </div>
              </div>
              <div class="card rounded-4 my-3 py-2 px-3 shadow border_none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row">
                  <div class="col-md-4 my-auto text-center">
                    <img src="./assets/img/Honest Sp Bhaji Pav.png" class="img-fluid rounded-4" alt="...">
                  </div>
                  <div class="col-md-8 py-1 d-flex align-items-start flex-column">
                    <p class="color_g text_22 mb-0">Pizza</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices served with pav(bread)</p>
                    <h5 class="color_r mt-auto">$18.50</h5>
                    <button class="mt-2 border-0 text_18 rounded text-white add-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
                  </div>
                </div>
              </div>
              <div class="card rounded-4 my-3 py-2 px-3 shadow border_none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row">
                  <div class="col-md-4 my-auto text-center">
                    <img src="./assets/img/Honest Sp Bhaji Pav.png" class="img-fluid rounded-4" alt="...">
                  </div>
                  <div class="col-md-8 py-1 d-flex align-items-start flex-column">
                    <p class="color_g text_22 mb-0">Honest sp. pizza</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices served with pav(bread)</p>
                    <h5 class="color_r mt-auto">$18.50</h5>
                    <button class="mt-2 border-0 text_18 rounded text-white add-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
                  </div>
                </div>
              </div>
            </div>

            <div id="list-item-5">
              <p class="text_25 my-3 fw-semibold">Pulav</p>
              <div class="card rounded-4 my-3 py-2 px-3 shadow border_none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row">
                  <div class="col-md-4 my-auto text-center">
                    <img src="./assets/img/Honest Sp Bhaji Pav.png" class="img-fluid rounded-4" alt="...">
                  </div>
                  <div class="col-md-8 py-1 d-flex align-items-start flex-column">
                    <p class="color_g text_22 mb-0">Pulav</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices served with pav(bread)</p>
                    <h5 class="color_r mt-auto">$18.50</h5>
                    <button class="mt-2 border-0 text_18 rounded text-white add-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
                  </div>
                </div>
              </div>
              <div class="card rounded-4 my-3 py-2 px-3 shadow border_none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row">
                  <div class="col-md-4 my-auto text-center">
                    <img src="./assets/img/Honest Sp Bhaji Pav.png" class="img-fluid rounded-4" alt="...">
                  </div>
                  <div class="col-md-8 py-1 d-flex align-items-start flex-column">
                    <p class="color_g text_22 mb-0">Pulav</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices served with pav(bread)</p>
                    <h5 class="color_r mt-auto">$18.50</h5>
                    <button class="mt-2 border-0 text_18 rounded text-white add-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
                  </div>
                </div>
              </div>
              <div class="card rounded-4 my-3 py-2 px-3 shadow border_none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row">
                  <div class="col-md-4 my-auto text-center">
                    <img src="./assets/img/Honest Sp Bhaji Pav.png" class="img-fluid rounded-4" alt="...">
                  </div>
                  <div class="col-md-8 py-1 d-flex align-items-start flex-column">
                    <p class="color_g text_22 mb-0">Pulav</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices served with pav(bread)</p>
                    <h5 class="color_r mt-auto">$18.50</h5>
                    <button class="mt-2 border-0 text_18 rounded text-white add-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
                  </div>
                </div>
              </div>
            </div>

            <div id="list-item-6">
              <p class="text_25 my-3 fw-semibold">Sides</p>
              <div class="card rounded-4 my-3 py-2 px-3 shadow border_none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row">
                  <div class="col-md-4 my-auto text-center">
                    <img src="./assets/img/Honest Sp Bhaji Pav.png" class="img-fluid rounded-4" alt="...">
                  </div>
                  <div class="col-md-8 py-1 d-flex align-items-start flex-column">
                    <p class="color_g text_22 mb-0">Sides</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices served with pav(bread)</p>
                    <h5 class="color_r mt-auto">$18.50</h5>
                    <button class="mt-2 border-0 text_18 rounded text-white add-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
                  </div>
                </div>
              </div>
              <div class="card rounded-4 my-3 py-2 px-3 shadow border_none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row">
                  <div class="col-md-4 my-auto text-center">
                    <img src="./assets/img/Honest Sp Bhaji Pav.png" class="img-fluid rounded-4" alt="...">
                  </div>
                  <div class="col-md-8 py-1 d-flex align-items-start flex-column">
                    <p class="color_g text_22 mb-0">Sides</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices served with pav(bread)</p>
                    <h5 class="color_r mt-auto">$18.50</h5>
                    <button class="mt-2 border-0 text_18 rounded text-white add-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
                  </div>
                </div>
              </div>
              <div class="card rounded-4 my-3 py-2 px-3 shadow border_none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row">
                  <div class="col-md-4 my-auto text-center">
                    <img src="./assets/img/Honest Sp Bhaji Pav.png" class="img-fluid rounded-4" alt="...">
                  </div>
                  <div class="col-md-8 py-1 d-flex align-items-start flex-column">
                    <p class="color_g text_22 mb-0">Sides</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices served with pav(bread)</p>
                    <h5 class="color_r mt-auto">$18.50</h5>
                    <button class="mt-2 border-0 text_18 rounded text-white add-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
                  </div>
                </div>
              </div>
            </div>

            <div id="list-item-7">
              <p class="text_25 my-3 fw-semibold">Bombay Chaat</p>
              <div class="card rounded-4 my-3 py-2 px-3 shadow border_none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row">
                  <div class="col-md-4 my-auto text-center">
                    <img src="./assets/img/Honest Sp Bhaji Pav.png" class="img-fluid rounded-4" alt="...">
                  </div>
                  <div class="col-md-8 py-1 d-flex align-items-start flex-column">
                    <p class="color_g text_22 mb-0">Bombay Chaat</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices served with pav(bread)</p>
                    <h5 class="color_r mt-auto">$18.50</h5>
                    <button class="mt-2 border-0 text_18 rounded text-white add-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
                  </div>
                </div>
              </div>
              <div class="card rounded-4 my-3 py-2 px-3 shadow border_none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row">
                  <div class="col-md-4 my-auto text-center">
                    <img src="./assets/img/Honest Sp Bhaji Pav.png" class="img-fluid rounded-4" alt="...">
                  </div>
                  <div class="col-md-8 py-1 d-flex align-items-start flex-column">
                    <p class="color_g text_22 mb-0">Bombay Chaat</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices served with pav(bread)</p>
                    <h5 class="color_r mt-auto">$18.50</h5>
                    <button class="mt-2 border-0 text_18 rounded text-white add-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
                  </div>
                </div>
              </div>
              <div class="card rounded-4 my-3 py-2 px-3 shadow border_none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row">
                  <div class="col-md-4 my-auto text-center">
                    <img src="./assets/img/Honest Sp Bhaji Pav.png" class="img-fluid rounded-4" alt="...">
                  </div>
                  <div class="col-md-8 py-1 d-flex align-items-start flex-column">
                    <p class="color_g text_22 mb-0">Bombay Chaat</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices</p>
                    <p class="text_grey fw-normal text_14"> Steamed vegetable curry with signature spices served with pav(bread)</p>
                    <h5 class="color_r mt-auto">$18.50</h5>
                    <button class="mt-2 border-0 text_18 rounded text-white add-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 py-2">
          <div class="shadow px-3 py-3">
            <div class="card px-2 shadow text-center border_none">
              <div>
                <p class="text_12 text-start mb-0 color_g pt-2">Pickup From</p>
                <p class="text_18 color_g pe-1 mb-0 text-start">9 Langhorne street, <br>
                  Dandenong, Melbourne, VIC, <br>
                  Australia - 3175</p>
              </div>
              <hr>
              <div class="d-flex justify-content-between px-1">
                <p class="text_20 color_g text_17 mb-0">Ready Time</p>
                <p class="text_17 color_g pe-1 text-end">Thursday, 24/11/22<br>
                  10:50pm</p>
              </div>
            </div>
            <div class="card my-2 py-3 shadow border_none" id="orderCard">
              <div class="row px-2">
                <div class="col-lg-12">
                  <!-- <div class="d-flex justify-content-between">
                    <p class="text_18 color_g">Bhaji Pav</p>
                    <p class="text_18 color_r pe-1">$16.50</p>
                  </div> -->

                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <div class="d-flex input-group-sm justify-content-between align-items-center">
                        <button  onclick="down('0')" id="down" class="border-0 circle-btn text_18 rounded text-white">-</button>
                        <input type="text" id="myNumber" readonly class="mx-1 border-0 form-control shadow-none input-number  text-white" value="1" />
                        <button onclick="up('20')" id="up" class="border-0 circle-btn rounded text-white">+</button>
                      </div>
                    </div>
                    <div class="d-flex align-items-center">
                      <span>
                        <button class="btn btn-link text-white" type="button" onclick="Del()" id="Delete">
                          <i class="bi bi-trash text_22 color_r"></i>
                          <!-- <img class="me-auto ms-auto" width="20px" height="20px" onclick="Del()" id="Delete" src="./assets/img/Delete.png" alt=""> -->
                        </button>
                      </span>
                      <button class="edit_btn text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="my-2">
              <button data-bs-toggle="modal" data-bs-target="#Backdrop" class="checkout_btn px-2 py-3 rounded-4 col-12">
                Check Out
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </section>

  <section id="about-us" class="d-flex align-items-center pt-3 pb-4">
    <div class="container text-left position-relative">
      <div class="col-md-8 pb-4">
        <h2 class="color_o">About Us</h2>
        <p>
          Welcome to our food ordering site! We're passionate about delivering the best possible dining experience to our customers, 
          whether they're ordering online or dining in at one of our restaurants.We provide you with facilities that save you time and 
          ease your hectic schedule. Enjoy any meal of your day with our service.
        </p>
      </div>
    </div>
  </section>

  <section class="bg_grey py-4" id="specials">
    <div class="container py-4">
      <p class="text-white mb-0">SPECIALS</p>
      <h1 class="color_o fw-bold">Check Our Specials</h1>

      <div class="row pt-4">
        <div id="list-example" class="list-group col-md-4">
          <a class="list-group-item list-group-item-action border-0 py-3" href="#list-item-1">Thai Curry and Rice</a>
          <a class="list-group-item list-group-item-action border-0 py-3" href="#list-item-2">Gujarati</a>
          <a class="list-group-item list-group-item-action border-0 py-3" href="#list-item-3">Rajasthani</a>
          <a class="list-group-item list-group-item-action border-0 py-3" href="#list-item-4">Punjabi</a>
        </div>
        <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example col-md-8"
          tabindex="0">
          <div id="list-item-1" class="row pb-3">
            <div class="col-md-8">
              <h4>Thai Curry and Rice</h4>
              <p>
                Thai curry and rice is a popular and delicious dish that originates from Thailand. The dish typically consists of a creamy and 
                spicy curry sauce made with a blend of aromatic herbs and spices such as lemongrass, galangal, kaffir lime leaves, coriander, and 
                Thai basil, combined with coconut milk and vegetables such as bell peppers, onions, carrots, and potatoes.
              </p>
            </div>
            <div class="col-md-4 mt-auto mb-auto">
              <img src="./assets/img/fruitdish.jpeg" class="img-fluid rounded-4" alt="">
            </div>
          </div>
          <div id="list-item-2" class="row pb-3">
            <div class="col-md-8">
              <h4>Gujarati</h4>
              <p>
              A Gujarati Thali is a traditional meal in the Indian state of Gujarat that consists of a variety of vegetarian dishes served on 
              a large plate or platter. The Thali typically includes a combination of sweet, savory, spicy, and tangy dishes that are meant to 
              be enjoyed together for a complete and balanced meal.
              </p>
            </div>
            <div class="col-md-4 mt-auto mb-auto">
              <img src="./assets/img/fruitdish.jpeg" class="img-fluid rounded-4" alt="">
            </div>
          </div>
          <div id="list-item-3" class="row pb-3">
            <div class="col-md-8">
              <h4>Rajasthani</h4>
              <p>
               Dal Bati is a popular dish from the Indian state of Rajasthan. It is a hearty and flavorful dish that consists of three main 
               components: Dal, Bati, and Churma. Dal is a lentil-based soup that is flavored with spices like cumin, coriander, turmeric, 
               and chili powder.Bati is a round ball-shaped bread made from wheat flour, semolina, and ghee. It is traditionally cooked in a 
               clay oven or tandoor until it is crispy on the outside and soft on the inside.
              </p>
            </div>
            <div class="col-md-4 mt-auto mb-auto">
              <img src="./assets/img/fruitdish.jpeg" class="img-fluid rounded-4" alt="">
            </div>
          </div>
          <div id="list-item-4" class="row pb-3">
            <div class="col-md-8">
              <h4>Punjabi</h4>
              <p>
              Paneer Angara is a popular Indian dish that is made with paneer (a type of Indian cottage cheese) that is marinated in a spicy 
              blend of herbs and spices, and then grilled or baked to perfection. Paneer Angara is typically served with a side of mint chutney 
              or raita, and is often garnished with fresh coriander leaves and lemon wedges. It can also be served as a main course with naan or 
              rice.
              </p>
            </div>
            <div class="col-md-4 mt-auto mb-auto">
              <img src="./assets/img/fruitdish.jpeg" class="img-fluid rounded-4" alt="">
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

</html>