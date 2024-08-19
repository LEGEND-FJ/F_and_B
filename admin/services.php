<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>F&B Store</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Custom styles -->
  <style>
    .nav-link {
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .nav-link:hover {
      background-color: skyblue;
      color: white;
    }

    .input-group .form-control {
      transition: box-shadow 0.3s ease, border-color 0.3s ease;
    }

    .input-group .form-control:focus {
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
      border-color: #007bff;
    }

    .about-img {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .about-img:hover {
      transform: scale(1.05);
      box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
    }

    /* Keyframe animation */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    h1,
    p {
      animation: fadeInUp 0.6s ease-out;
    }

    /* Basic styling */

    /* Navbar links animation */
    .navbar-nav .nav-link {
      transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
      background-color: steelblue;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      margin-right: 5px;
    }

    .navbar-nav {
      margin-left: 10px;
      margin-right: 10px;
    }

    .navbar-nav .nav-link:hover {
      color: #FF8800;
      background-color: skyblue;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
    }

    .navbar-nav .nav-link.active {
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      50% {
        transform: scale(1.1);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
      }

      100% {
        transform: scale(1);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }
    }

    .input-group input[type="search"] {
      transition: border-color 0.3s ease-in-out;
    }

    .input-group input[type="search"]:focus {
      border-color: #FF8800;
      /* Change border color on focus */
    }

    /* Card hover effect */
    .card {
      transition: transform 0.3s ease-in-out;
    }

    .card:hover {
      transform: scale(1.05);
      /* Scale up on hover */
    }

    /* Button hover effect */
    .btn-outline-info,
    .btn-primary,
    .btn-light {
      transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    }

    .btn-outline-info:hover,
    .btn-primary:hover,
    .btn-light:hover {
      background-color: skyblue;
      /* Change background color on hover */
      color: #ffffff;
      /* Change text color on hover */
    }

    /* Floating icon animation */
    .floating {
      animation: float 2s ease-in-out infinite;
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-10px);
        /* Floating animation */
      }
    }

    .col-lg-8 {
      margin-left: 30%;

    }
    .baloo{
      font-family: baloo;
      font-weight: 400;
    }
    .page-title h2{
      padding-top: 85px;
      font-size: 45px;
      background-position: top center;
    }
  </style>
</head>

<body>
  <div class="row" style="background:steelblue;">
    <div class="col-md-5">
      <a href="# target=" _blank" class="float-start">
        <img src="assets/img/fb-high-resolution.png" height="80" />
      </a>
    </div>
    <div class="col-md-7">
      <div class="mt-4">
        <div class="col-lg-8">
          <div class="d-flex float-end">
            <a href="Signup.php" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i class="fas fa-user-alt m-1 me-md-2 text-white"></i>
              <p class="d-none d-md-block mb-0 text-white">Sign in</p>
            </a>
            <a href="#" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i class="fas fa-heart m-1 me-md-2 text-white"></i>
              <p class="d-none d-md-block mb-0 text-white">Wishlist</p>
            </a>
            <a class="btn btn-primary me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"> <i class="fas fa-shopping-cart m-1 me-md-2 text-white"></i>
              <p class="d-none d-md-block mb-0 text-white">My cart</p>
            </a>
            <button class="btn btn-primary me-1 border rounded py-2 px-1 nav-link d-flex align-items-center" id="openSweetAlert">
              <i class="fas fa-search m-1 me-md-2 text-white"></i>
              <p class="d-none d-md-block mb-0 text-white">Search</p>
            </button>
          </div>
        </div>
        <script>
          document.getElementById('openSweetAlert').addEventListener('click', function() {
            Swal.fire({
              title: 'Search',
              html: `
                <form class="row g-3" action="search.php" method="GET">
                    <div class="col-auto">
                        <label for="form1" class="visually-hidden">Search Query</label>
                        <input type="text" id="form1" name="query" class="form-control" required placeholder="Search for...">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i> Search
                        </button>
                    </div>
                </form>
                `,
              showCloseButton: true,
              showCancelButton: false,
              showConfirmButton: false,
              focusConfirm: false,
              allowOutsideClick: true,
              customClass: {
                container: 'my-swal'
              }
            });
          });
        </script>
      </div>

      <!-- Right elements -->
    </div>
  </div>
  </div>

  </div>
  </div>
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">My cart</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <p>Here are your item list</p>
      <div id="cart-items"></div>
    </div>
  </div>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-info-subtle">
    <!-- Container wrapper -->
    <div class="container justify-content-center justify-content-md-between">
      <!-- Toggle button -->
      <button class="navbar-toggler border py-2 text-dark" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarLeftAlignExample" aria-controls="navbarLeftAlignExample" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="abt.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="services.php">Service</a>
          </li>
          <!-- Navbar dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              Others
            </a>
            <!-- Dropdown menu -->
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="#">Action</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another action</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- Left links -->
      </div>
    </div>
    <!-- Container wrapper -->
  </nav>

  <div class="row background">
    <div class="container page-title">
          <h2 class="baloo text-center">Services</h2>
    </div>
  </div>

  <div class="row" style="background-image: url(assets/images/services/feature-bg.jpg); padding:80px;">
        <div class="col-md-4 mb-4">
            <a href="passenger_service_transport.php" style="text-decoration:none; color:#333;">
                </a><div class="card border-0 shadow-sm" style="max-width: 26rem; margin:0px auto"><a href="passenger_service_transport.php" style="text-decoration:none; color:#333;">
                    <img src="img/passenger-service.png" class="card-img-top" style="margin-top:0px !important" alt="Service">
                    </a><div class="card-body"><a href="passenger_service_transport.php" style="text-decoration:none; color:#333;">
                        <h5 class="card-title baloo text-uppercase">License for Passenger Service Transport</h5>
                        </a><p class="card-text montserrat" style="font-size:13px; color:#687693; line-height:1.5rem;"><a href="passenger_service_transport.php" style="text-decoration:none; color:#333;">We are dedicated to streamlining the licencing process for various passenger transport providers, ensuring legal compliance and operational efficiency. Whether...
                            <br>

                            </a><a href="passenger_service_transport.php" class="blockquote-footer text-success" style="text-decoration:none;">Read More</a>
                        </p>
                    </div>
                </div>
            
        </div>
        <div class="col-md-4 mb-4">
            <a href="onstreet_parking_operator_details.php" style="text-decoration:none; color:#333;">
                </a><div class="card border-0 shadow-sm" style="max-width: 26rem; margin:0px auto"><a href="onstreet_parking_operator_details.php" style="text-decoration:none; color:#333;">
                    <img src="assets/img/exclusive.png" class="card-img-top" style="margin-top:0px !important" alt="Service">
                    </a><div class="card-body "><a href="onstreet_parking_operator_details.php" style="text-decoration:none; color:#333;">
                        <h5 class="card-title baloo text-uppercase">On-Street Parking Operator!</h5>
                        </a><p class="card-text montserrat" style="font-size:13px; text-align:left; word-wrap:break-word; font-weight:normal; color:#687693; line-height:1.5rem;"><a href="onstreet_parking_operator_details.php" style="text-decoration:none; color:#333;">Our service makes getting licenses for managing parking spaces easy and efficient. If you're in charge of places where tricycles, taxis, or buses park, we give you the permission you need to create...
                            <br>
                            </a><a href="onstreet_parking_operator_details.php" class="blockquote-footer text-success" style="text-decoration:none;">Read More</a>
                        </p>


                    </div>
                </div>
            
        </div>
        <div class="col-md-4 mb-4">
            <a href="goods_and_services_details.php" style="text-decoration:none; color:#333;">
                </a><div class="card border-0 shadow-sm" style="max-width: 26rem; margin:0px auto"><a href="goods_and_services_details.php" style="text-decoration:none; color:#333;">
                    <img src="assets/img/product-10.jpg" class="card-img-top" style="margin-top:0px !important" alt="Service">
                    </a><div class="card-body"><a href="goods_and_services_details.php" style="text-decoration:none; color:#333;">
                        <h5 class="card-title baloo text-uppercase">Goods and Services Transport Providers</h5>
                        </a><p class="card-text montserrat" style="font-size:13px; color:#687693; line-height:1.5rem;"><a href="goods_and_services_details.php" style="text-decoration:none; color:#333;">The Goods and Services Transport Operator License is designed for individuals or entities looking to establish a business involving the transportation...
                            <br>
                            </a><a href="goods_and_services_details.php" class="blockquote-footer text-success" style="text-decoration:none;">Read More</a>
                        </p>

                    </div>
                </div>
            
        </div>
        <div class="col-md-4 mb-4">
            <a href="temporary_park_operator_details.php" style="text-decoration:none; color:#333;">
                </a><div class="card border-0 shadow-sm" style="max-width: 26rem; margin:0px auto"><a href="temporary_park_operator_details.php" style="text-decoration:none; color:#333;">
                    <img src="assets/img/product-9.jpg" class="card-img-top" style="margin-top:0px !important" alt="Service">
                    </a><div class="card-body "><a href="temporary_park_operator_details.php" style="text-decoration:none; color:#333;">
                        <h5 class="card-title baloo text-uppercase">Temporary Park Operators License</h5>
                        </a><p class="card-text montserrat" style="font-size:13px; text-align:left; word-wrap:break-word; font-weight:normal; color:#687693; line-height:1.5rem;"><a href="temporary_park_operator_details.php" style="text-decoration:none; color:#333;">We are dedicated to streamlining the process for becoming a licensed operator of PPP temporary transit parks. Whether you manage tricycle parks, taxi ranks...
                            <br>
                            </a><a href="temporary_park_operator_details.php" class="blockquote-footer text-success" style="text-decoration:none;">Read More</a>
                        </p>


                    </div>
                </div>
            
        </div>
        <div class="col-md-4 mb-4">
            <a href="off_street_parking_details.php" style="text-decoration:none; color:#333;">
                </a><div class="card border-0 shadow-sm" style="max-width: 26rem; margin:0px auto"><a href="off_street_parking_details.php" style="text-decoration:none; color:#333;">
                    <img src="assets/img/pexels-adrian-dorobantu-989175-2300334.jpg" class="card-img-top" style="margin-top:0px !important" alt="Service">
                    </a><div class="card-body"><a href="off_street_parking_details.php" style="text-decoration:none; color:#333;">
                        <h5 class="card-title baloo text-uppercase">Off Street Parking Service</h5>
                        </a><p class="card-text montserrat" style="font-size:13px; color:#687693; line-height:1.5rem;"><a href="off_street_parking_details.php" style="text-decoration:none; color:#333;">We are dedicated to streamlining the process for becoming a licensed operator of off-street parking services. Whether you manage parking lots...
                            <br>

                            </a><a href="off_street_parking_details.php" class="blockquote-footer text-success" style="text-decoration:none;">Read More</a>
                        </p>
                    </div>
                </div>
            
        </div>
        <div class="col-md-4 mb-4">
            <a href="motor_park_operator_details.php" style="text-decoration:none; color:#333;">
                </a><div class="card border-0 shadow-sm" style="max-width: 26rem; margin:0px auto"><a href="motor_park_operator_details.php" style="text-decoration:none; color:#333;">
                    <img src="assets/img/buy-2.jpg" class="card-img-top" style="margin-top:0px !important" alt="Service">
                    </a><div class="card-body"><a href="motor_park_operator_details.php" style="text-decoration:none; color:#333;">
                        <h5 class="card-title baloo text-uppercase">Designated Motor Park Operator</h5>
                        </a><p class="card-text montserrat" style="font-size:13px; color:#687693; line-height:1.5rem;"><a href="motor_park_operator_details.php" style="text-decoration:none; color:#333;">We are dedicated to streamlining the process for becoming a registered operator of designated motor parks. Whether you manage motor parks for...
                            <br>
                            </a><a href="motor_park_operator_details.php" class="blockquote-footer text-success" style="text-decoration:none;">Read More</a>
                        </p>

                    </div>
                </div>
            
        </div>
        <div class="col-md-4 mb-4">
            <a href="e_hailing_passenger_service.php" style="text-decoration:none; color:#333;">
                </a><div class="card border-0 shadow-sm" style="max-width: 26rem; margin:0px auto"><a href="e_hailing_passenger_service.php" style="text-decoration:none; color:#333;">
                    <img src="assets/img/Hoodie2.jpg" class="card-img-top" style="margin-top:0px !important" alt="Service">
                    </a><div class="card-body "><a href="e_hailing_passenger_service.php" style="text-decoration:none; color:#333;">
                        <h5 class="card-title baloo text-uppercase"> License for E-Hailing Passenger Services</h5>
                        </a><p class="card-text montserrat" style="font-size:13px; text-align:left; word-wrap:break-word; font-weight:normal; color:#687693; line-height:1.5rem;"><a href="e_hailing_passenger_service.php" style="text-decoration:none; color:#333;">Discover the seamless world of Passenger Service Transport Licensing! We are dedicated to streamlining the licencing process for...
                            <br>
                            </a><a href="e_hailing_passenger_service.php" class="blockquote-footer text-success" style="text-decoration:none;">Read More</a>
                        </p>


                    </div>
                </div>
            
        </div>

        <div class="col-md-4 mb-4">
            <a href="bus_stop_and_gantries.php" style="text-decoration:none; color:#333;">
                </a><div class="card border-0 shadow-sm" style="max-width: 26rem; margin:0px auto"><a href="bus_stop_and_gantries.php" style="text-decoration:none; color:#333;">
                    <img src="img/gantries.png" class="card-img-top" style="margin-top:0px !important" alt="Service">
                    </a><div class="card-body "><a href="bus_stop_and_gantries.php" style="text-decoration:none; color:#333;">
                        <h5 class="card-title baloo text-uppercase"> Bus Stop Shelters and Gantries Concessions</h5>
                        </a><p class="card-text montserrat" style="font-size:13px; text-align:left; word-wrap:break-word; font-weight:normal; color:#687693; line-height:1.5rem;"><a href="bus_stop_and_gantries.php" style="text-decoration:none; color:#333;">Our Bus Stop Shelters and Gantries Concession program is tailor-made for organizations keen on managing bus stop infrastructure. We offer an all-encompassing solution...
                            <br>
                            </a><a href="bus_stop_and_gantries.php" class="blockquote-footer text-success" style="text-decoration:none;">Read More</a>
                        </p>
                    </div>
                </div>
            
        </div>
        <div class="col-md-4 mb-4">
            <a href="provision_of_permanent_transit.php" style="text-decoration:none; color:#333;">
                </a><div class="card border-0 shadow-sm" style="max-width: 26rem; margin:0px auto"><a href="provision_of_permanent_transit.php" style="text-decoration:none; color:#333;">
                    <img src="img/permanent_transit.png" class="card-img-top" style="margin-top:0px !important" alt="Service">
                    </a><div class="card-body "><a href="provision_of_permanent_transit.php" style="text-decoration:none; color:#333;">
                        <h5 class="card-title baloo text-uppercase"> Provision of Permanent Transit Terminal</h5>
                        </a><p class="card-text montserrat" style="font-size:13px; text-align:left; word-wrap:break-word; font-weight:normal; color:#687693; line-height:1.5rem;"><a href="provision_of_permanent_transit.php" style="text-decoration:none; color:#333;">Our Provision of Permanent Transit Terminal initiative is designed for entities looking to operate cutting-edge transportation hubs. Part of our mandate is to...
                            <br>
                            </a><a href="provision_of_permanent_transit.php" class="blockquote-footer text-success" style="text-decoration:none;">Read More</a>
                        </p>
                    </div>
                </div>
            
        </div>
    </div>

    <footer class="text-center text-lg-start text-muted mt-3" style="background-color: #7A78DD;">
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start pt-4 pb-4">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-12 col-lg-3 col-sm-12 mb-2">
            <!-- Content -->
            <a href="index.php" target="_blank" class="">
              <img src="assets/img/fb-high-resolution-logo.png" height="130" />
            </a>
            <p class="mt-2 text-white">
              © 2024 Copyright:F&B Store
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-6 col-sm-4 col-lg-2">
            <!-- Links -->
            <h6 class="text-uppercase text-white fw-bold mb-2">
              Store
            </h6>
            <ul class="list-unstyled mb-4">
              <li><a class="text-white" href="abt.php">About us</a></li>
              <li><a class="text-white" href="#">Find store</a></li>
              <li><a class="text-white" href="#">Categories</a></li>
              <li><a class="text-white" href="#">Blogs</a></li>
            </ul>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-6 col-sm-4 col-lg-2">
            <!-- Links -->
            <h6 class="text-uppercase text-white fw-bold mb-2">
              Information
            </h6>
            <ul class="list-unstyled mb-4">
              <li><a class="text-white" href="#">Help center</a></li>
              <li><a class="text-white" href="#">Money refund</a></li>
              <li><a class="text-white" href="#">Shipping info</a></li>
              <li><a class="text-white" href="#">Refunds</a></li>
            </ul>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-6 col-sm-4 col-lg-2">
            <!-- Links -->
            <h6 class="text-uppercase text-white fw-bold mb-2">
              Support
            </h6>
            <ul class="list-unstyled mb-4">
              <li><a class="text-white" href="#">Help center</a></li>
              <li><a class="text-white" href="#">Documents</a></li>
              <li><a class="text-white" href="#">Account restore</a></li>
              <li><a class="text-white" href="#">My orders</a></li>
            </ul>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-12 col-sm-12 col-lg-3">
            <!-- Links -->
            <h6 class="text-uppercase text-white fw-bold mb-2">Newsletter</h6>
            <p class="text-white">Stay in touch with latest updates about our products and offers</p>
            <div class="input-group mb-3">
              <input type="email" class="form-control border" placeholder="Email" aria-label="Email" aria-describedby="button-addon2" />
              <button class="btn btn-light border shadow-0" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                Join
              </button>
            </div>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <div class="">
      <div class="container">
        <div class="d-flex justify-content-between py-4 border-top">
          <!--- payment --->
          <div>
            <i class="fab fa-lg fa-cc-visa text-dark"></i>
            <i class="fab fa-lg fa-cc-amex text-dark"></i>
            <i class="fab fa-lg fa-cc-mastercard text-dark"></i>
            <i class="fab fa-lg fa-cc-paypal text-dark"></i>
          </div>
          <!--- payment --->

          <!--- language selector --->
          <div class="dropdown dropup">
            <a class="dropdown-toggle text-dark" href="#" id="Dropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> <i class="flag-united-kingdom flag m-0 me-1"></i>English </a>

            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Dropdown">
              <li>
                <a class="dropdown-item" href="#"><i class="flag-united-kingdom flag"></i>English <i class="fa fa-check text-success ms-2"></i></a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
              </li>
            </ul>
          </div>
          <!--- language selector --->
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>