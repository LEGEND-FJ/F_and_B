<?php require_once "controllerUserData.php"; ?>
<?php
$email = $_SESSION['email'];
if ($email == false) {
    header('Location: Signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-9q15rXnA2ZRd0P3HbeIOYbV1Tiwpv7tDBYmWr8pp7YY0tmDTKkxjQaZJK5rMEvFXHnl8MvOr6csS7G3bFZjSmg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.js"></script>
    <style>
        /* animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        .slide-in {
            animation: slideIn 0.5s ease-in-out;
        }

        .form-group input {
            transition: border-color 0.3s ease-in-out;
        }

        .form-group input:focus {
            border-color: #4e73df;
        }

        .btn-user {
            transition: transform 0.2s;
        }

        .btn-user:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="bg-gradient-primary">
    <div class="container fade-in">
        <!-- Outer Row -->
        <div class="row justify-content-center slide-in">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Code Verification</h1>
                                    </div>
                                    <?php
                                    if (isset($_SESSION['info'])) {
                                    ?>
                                        <div class="alert alert-success text-center">
                                            <?php echo $_SESSION['info']; ?>
                                        </div>
                                    <?php
                                    }
                                    if (count($errors) > 0) {
                                    ?>
                                        <div class="alert alert-danger text-center">
                                            <?php
                                            foreach ($errors as $showerror) {
                                                echo $showerror;
                                            }
                                            ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <form class="user" action="user-otp.php" method="POST" autocomplete="off">
                                        <div class="form-group">
                                            <input class="form-control form-control-user" type="number" name="otp" placeholder="Enter verification code" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="btn btn-primary btn-user btn-block" type="submit" name="check" value="Submit">
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="Signin.php">Back to Login</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="Signup.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>