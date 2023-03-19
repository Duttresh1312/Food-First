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
          <a href="index.html">FOOD FIRST</a>
        </div>

        <nav id="navbar" class="navbar">
          <ul class="mx-2">
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#restaurant">Restaurant</a></li>
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
                          <li><a class="dropdown-item fs-5 fw-bold" href="">As Restaurant</a></li>
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
                    <form id="login-form" enctype="multipart/form-data" method="post">
                        <h1 class="modal-title pb-2" id="exampleModalLabel">Login</h1>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label" >Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com" name="logemail" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword1" name="logpassword" placeholder="Password" required>
                        </div>
                        <div>
                            <p>Don't have an account? <a href="" id="signup-link">Sign up</a></p>
                        </div>
                        <div class="px-4 text-center mb-4">
                            <button type="submit" id="loginClass" class="btn btn-warning outline border-0 rounded-5 px-4 py-2">Login</button>
                        </div>
                    </form>
                    <form id="signup-form"  enctype="multipart/form-data" method="post">
                        <h1 class="modal-title pb-2" id="exampleModalLabel">Sign Up</h1>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="inputUsername2" placeholder="your name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleFormControlInput2"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="inputPassword2" placeholder="Password">
                        </div>
                        <div>
                            <p>Already have an account? <a href="" id="login-link">Login</a></p>
                        </div>
                        <div id="btnClass" class="px-4 text-center mb-4">
                            <button type="button" id="signupClass" class="btn btn-warning outline border-0 rounded-5 px-4 py-2">Signup</button>
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
      <!-- <a href="" class="btn-get-started scrollto">Login</a>
      <a href="" class="btn-get-started scrollto">Sign up</a> -->
    </div>
  </section>

  <section class="featured-services bg_grey py-4" id="restaurant">
    <div class="container py-4">
      <h1 class="color_o fw-bold">Find your Restaurant</h1>
      <p class="text-white">FEATURED RESTAURANT</p>

      <div class="row g-4 pt-3">
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box bg_card">
            <h2 class="color_o fw-bold">01</h2>
            <h4 class="title"><a href="/Front-end/Kingsman/index.html" class="text-white">Kingsman Eatery</a></h4>
            <p class="description">
              Our thorough blah blah blah blah blah blah blah blah blah.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box bg_card">
            <h2 class="color_o fw-bold">02</h2>
            <h4 class="title"><a href="/Front-end/Dhaka Mukki/index.html" class="text-white">Dhaka Mukki</a></h4>
            <p class="description">
              Our thorough blah blah blah blah blah blah blah blah blah.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box bg_card">
            <h2 class="color_o fw-bold">03</h2>
            <h4 class="title"><a href="/Front-end/Mr Puff/index.html" class="text-white">Mr.Puff</a></h4>
            <p class="description">
              Our thorough blah blah blah blah blah blah blah blah blah.
            </p>
          </div>
        </div>
      </div>

      <div class="d-flex pt-4">
        <button type="button" class="ms-auto me-auto btn btn-lg bg_orange text-white">
          <span><i class="bi bi-plus-circle me-2"></i></span>
          More Restaurant
        </button>
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
  <script src="./assets/js/main.js"></script>
  <script src="handle.js"></script>
</body>

</html>