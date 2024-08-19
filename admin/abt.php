<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>F&B Store</title>
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
                            <p class="d-none d-md-block mb-0">Sign in</p>
                        </a>
                        <a href="#" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i class="fas fa-heart m-1 me-md-2 text-white"></i>
                            <p class="d-none d-md-block mb-0">Wishlist</p>
                        </a>
                        <a class="btn btn-primary me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"> <i class="fas fa-shopping-cart m-1 me-md-2 text-white"></i>
                            <p class="d-none d-md-block mb-0">My cart</p>
                        </a>
                        <a class="btn btn-primary me-1 border rounded py-2 px-1 nav-link d-flex align-items-center" type="blank" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fas fa-search m-1 me-md-2 text-white"></i>
                            <p class="d-none d-md-block mb-0">Search</p>
                        </a>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Search</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <form class="row g-3" action="search.php" method="GET">
                                    <div class="col-auto">
                                        <label for="staticEmail2" class="visually-hidden">Email</label>
                                        <input type="text" id="form1" name="query" class="form-control " required />

                                    </div>

                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-search "></i>
                                        </button>
                                    </div>
                                </form>




                            </div>
                            <!-- <div class="col-lg-12 col-md-12 col-12">
                    <form action="search.php" method="GET" class="input-group float-center">
                      <div class="form-outline">
                        <input type="search" id="form1" name="query" class="form-control " />
                        <label class="form-label" for="form1">Search</label>
                        <button type="submit" class="btn btn-primary">
                          <i class="fas fa-search "></i>
                        </button>
                      </div>

                    </form>
                  </div> -->
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
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
            <p>Here are you item list</p>
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
                        <a class="nav-link text-white" href="services.php">Services</a>
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
    </header>

    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <h1 class="text-center text-black bg-info-subtle" style="opacity: 0.8;">ABOUT US</h1>
                <p>A fabric store for the modern maker!! Fabric is very essence of creation,<br> the foundation of artistry, and the canvas of imagination.
                    <br> its the tactical manifestation of our dreams, the soft whisper of our thoughts,<br> and vibrant expression of our souls.
                    with every thread, every weave, and every fold,<br> fabric tells a story of human ingenuity, creativity, and passion.
                </p>
            </div>
            <div class="col-6">
                <img src="assets/img/handsome-confident-hipster-modelsexy-unshaven-man-dressed-summer-stylish-green-hoodie-jeans-clothes-fashion-male-with-curly-hairstyle-posing-studio-isolated-blue.jpg" style="width:100%; height:auto; border-radius: 12px 14px;" height="auto" class="about-img">
            </div>
        </div>
    </div>



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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-3jSmmy8xZsb3fHfsM9uODDEG2dfVktmN5/3tHsxM/Y05F5ksMD9wYX7FvpwmKNNA" crossorigin="anonymous"></script>
</body>

</html>