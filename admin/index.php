<?php
include('config/db.php');
?>

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
  <!-- Navbar -->
  <!-- Jumbotron -->
  <div class=" text-white py-6">
    <div class="container py-6">
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" style="width: 100%; height: 75vh;" data-bs-interval="10000">
            <video muted autoplay loop class="d-block w-100">
              <source src="assets/video/fashion.mp4" type="video/mp4">
            </video>
            <div class="carousel-caption d-none d-md-block text-white" style="font-weight: 400; font-family:Arial, Helvetica, sans-serif;">
              <h5>WELCOME TO F&B Store!</h5>
              <p>From casual wear to formal attire, Peak Fashion has something for everyone. Their collection includes the latest styles and trends.</p>
            </div>
          </div>
          <div class="carousel-item" style="width: 100%; height: 75vh;" data-bs-interval="10000">
            <img src="assets/img/pexels-adrian-dorobantu-989175-2300334.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-white" style="font-weight: 500; font-family:Arial, Helvetica, sans-serif; background-color: black; opacity:0.8;">
              <h5>LATEST</h5>
              <p>Check out some of our latest weekly deals and discounts on top fashion brands. From trendy tops to stylish shoes, we've got you covered with the best offers in town.</p>
            </div>
          </div>
          <div class="carousel-item" style="width: 100%; height: 75vh;" data-bs-interval="10000">
            <img src="assets/img/step.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-white" style="font-weight: 500; font-family:Arial, Helvetica, sans-serif;">
              <h5>SPORTS</h5>
              <p>Check out our sports wear collection, featuring high-performance gear for athletes and fitness enthusiasts. From running shoes to yoga pants, we've got the right gear to help you reach your fitness goals.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Jumbotron -->
  </header>
  <!-- Products -->
  <section>
    <div class="container my-5">
    <header class="mb-4">
        <h3 style="color:steelblue">OUR PRODUCTS</h3>
    </header>
    <div class="row" id="product-list">
        <?php
        // Connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "users_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to get new products
        $result = $conn->query("SELECT * FROM new_products ORDER BY product_name DESC");

        $items = '';
        while ($row = $result->fetch_assoc()) {
            $items .= '<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                        <div class="card w-100 my-2 shadow-2-strong">
                            <img src="' . htmlspecialchars($row['product_photo']) . '" class="card-img-top product-photo" style="aspect-ratio: 1 / 1" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title product-name">' . htmlspecialchars($row['product_name']) . '</h5>
                                <h5 class="product-price">₦ ' . htmlspecialchars($row['price']) . ' </h5>
                                <p class="card-text">Quantity: ' . htmlspecialchars($row['quantity']) . '</p>
                                <p>Posted BY: ' . htmlspecialchars($row['posted_user']) . '</p>
                                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                    <a href="#!" class="btn btn-primary shadow-0 me-1 add-to-cart-btn" 
                                    data-id="' . htmlspecialchars($row['id']) . '"
                                    data-name="' . htmlspecialchars($row['product_name']) . '"
                                    data-price="' . htmlspecialchars($row['price']) . '"
                                    data-quantity="' . htmlspecialchars($row['quantity']) . '"
                                    style="background-color:steelblue">Add to cart</a>
                                    <a href="#!" class="btn btn-light border px-2 pt-2">
                                        <i class="fas fa-heart fa-lg text-secondary px-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>';
        }

        // Close the connection
        $conn->close();

        // Output the items
        echo $items;
        ?>
    </div>
</div>
    <!-- <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong" id="item-1">
            <img src="assets/img/photo_1_2024-07-04_09-39-01.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">BABBAN- RIGA</h5>
              <H5>Color- Black</H5>
              <p class="card-text">N35,000</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong" id="item-2">
            <img src="" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">BABBAN- RIGA</h5>
              <h5>Color- Blue</h5>
              <p class="card-text">N45,000</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong" id="item-3">
            <img src="assets/img/photo_4_2024-07-04_09-39-01.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">NORMAL- KAFTAN</h5>
              <h5>Color- White</h5>
              <p class="card-text">N20,000</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong" id="item-4">
            <img src="assets/img/photo_3_2024-07-04_09-39-01.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">NORMAL- KAFTAN</h5>
              <h5>Color- Brown</h5>
              <p class="card-text">N25,000</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong" id="item-5">
            <img src="assets/img/shoe1.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">SNEAKERS</h5>
              <h5>Color- Black</h5>
              <p class="card-text">N15,000</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong" id="item-6">
            <img src="assets/img/shoe2.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">SNEAKERS</h5>
              <H5>Color- White</H5>
              <p class="card-text">N18,000</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong" id="item-7">
            <img src="assets/img/Hoodie1-removebg-preview.png" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">HOODIE</h5>
              <h5>Color- White</h5>
              <p class="card-text">N11,000</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong" id="item-8">
            <img src="assets/img/Hoodie2.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">HOODIE</h5>
              <h5>Color- Black</h5>
              <p class="card-text">N13,500</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </section>
  <!-- Products -->

  <!-- Feature -->
  <section class="mt-5" style="background-color: #f5f5f5;">
    <div class="container text-dark pt-3">
      <header class="pt-4 pb-3">
        <h3>Why choose us</h3>
      </header>

      <div class="row mb-4">
        <div class="col-lg-4 col-md-6">
          <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
              <i class="fas fa-camera-retro fa-2x fa-fw text- floating" style="color:steelblue"></i>
            </span>
            <figcaption class="info">
              <h6 class="title">Reasonable prices</h6>
              <p>We've Got You Covered With The Best Offers In Town</p>
            </figcaption>
          </figure>
          <!-- itemside -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
          <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
              <i class="fas fa-star fa-2x fa-fw text- floating" style="color:steelblue"></i>
            </span>
            <figcaption class="info">
              <h6 class="title">Best quality</h6>
              <p> Our Brand Offers The Best Quality Products Worldwide</p>
            </figcaption>
          </figure>
          <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
          <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
              <i class="fas fa-plane fa-2x fa-fw text- floating" style="color:steelblue"></i>
            </span>
            <figcaption class="info">
              <h6 class="title">Worldwide shipping</h6>
              <p>We Are Offering Worldwide Shipping Across The Globe</p>
            </figcaption>
          </figure>
          <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
          <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
              <i class="fas fa-users fa-2x fa-fw text- floating" style="color:steelblue"></i>
            </span>
            <figcaption class="info">
              <h6 class="title">Customer satisfaction</h6>
              <p>We Priotize Our Customers Satisfaction</p>
            </figcaption>
          </figure>
          <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
          <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
              <i class="fas fa-thumbs-up fa-2x fa-fw text- floating" style="color:steelblue"></i>
            </span>
            <figcaption class="info">
              <h6 class="title">Happy customers</h6>
              <p>At F&B Store, Our Customers Happiness Is Our Top Priority!! </p>
            </figcaption>
          </figure>
          <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
          <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
              <i class="fas fa-box fa-2x fa-fw text- floating" style="color:steelblue"></i>
            </span>
            <figcaption class="info">
              <h6 class="title">Thousand items</h6>
              <p>From Native To Sports Wears We Ensure You'll Find What You're Looking For</p>
            </figcaption>
          </figure>
          <!-- itemside // -->
        </div>
        <!-- col // -->
      </div>
    </div>
    <!-- container end.// -->
  </section>
  <!-- Feature -->

  <!-- Blog -->
  <section class="mt-5 mb-4">
    <div class="container text-dark">
      <header class="mb-4">
        <h3 style="color:steelblue">NEW PRODUCTS</h3>
      </header>

      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <article>
            <a href="#" class="img-fluid">
              <img class="rounded w-100" src="assets/img/sport1.jpg" style="object-fit: cover;" height="160" />
            </a>
            <div class="mt-2 text-muted small d-block mb-1">
              <span>
                <i class="fa fa-calendar-alt fa-sm"></i>
                15.07.2024
              </span>
              <a href="#">
                <h6 class="text-dark">Sport Shoe</h6>
              </a>
              <p>Brand New Product One Of Two</p>
            </div>
          </article>
        </div>
        <!-- col.// -->
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <article>
            <a href="#" class="img-fluid">
              <img class="rounded w-100" src="assets/img/sport2.jpg" style="object-fit: cover;" height="160" />
            </a>
            <div class="mt-2 text-muted small d-block mb-1">
              <span>
                <i class="fa fa-calendar-alt fa-sm"></i>
                15.07.2024
              </span>
              <a href="#">
                <h6 class="text-dark">Sport Shoe</h6>
              </a>
              <p>Brand New Product One Of One</p>
            </div>
          </article>
        </div>
        <!-- col.// -->
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <article>
            <a href="#" class="img-fluid">
              <img class="rounded w-100" src="assets/img/cap1.jpg" style="object-fit: cover;" height="160" />
            </a>
            <div class="mt-2 text-muted small d-block mb-1">
              <span>
                <i class="fa fa-calendar-alt fa-sm"></i>
                15.05.2024
              </span>
              <a href="#">
                <h6 class="text-dark">Native Cap</h6>
              </a>
              <p>Brand New Product One Of Three</p>
            </div>
          </article>
        </div>
        <!-- col.// -->
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <article>
            <a href="#" class="img-fluid">
              <img class="rounded w-100" src="assets/img/cap2.jpg" style="object-fit: cover;" height="160" />
            </a>
            <div class="mt-2 text-muted small d-block mb-1">
              <span>
                <i class="fa fa-calendar-alt fa-sm"></i>
                15.07.2024
              </span>
              <a href="#">
                <h6 class="text-dark">Native Cap</h6>
              </a>
              <p>Brand New Product One Of Two</p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog -->

  <!-- Footer -->
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
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
      const cartItemsContainer = document.getElementById('cart-items');

      addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
          const card = button.closest('.card');
          const productPhoto = card.querySelector('.product-photo').src;
          const productName = card.querySelector('.product-name').textContent;
          const productPrice = card.querySelector('.product-price').textContent;

          const cartItem = document.createElement('div');
          cartItem.classList.add('cart-item');
          cartItem.innerHTML = `
                <div class="card mb-2">
                    <img src="${productPhoto}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                    <div class="card-body">
                        <h5 class="card-title">${productName}</h5>
                        <p class="card-text">${productPrice}</p>
                    </div>
                </div>
            `;

          cartItemsContainer.appendChild(cartItem);

          const offcanvas = new bootstrap.Offcanvas(document.getElementById('offcanvasWithBothOptions'));
          offcanvas.show();
        });
      });
    });
  </script>

  <script>
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.add-to-cart-btn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.dataset.id;
            const name = this.dataset.name;
            const price = this.dataset.price;
            const quantity = this.dataset.quantity;

            fetch('add_to_cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `id=${id}&name=${name}&price=${price}&quantity=${quantity}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Item added to cart!');
                } else {
                    alert('Failed to add item to cart.');
                }
            });
        });
    });
});
</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>