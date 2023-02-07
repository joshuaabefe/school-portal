<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Opti:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body class="Kaisei-Opti">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navPy" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#"><img src="assets/png/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fi fi-br-menu-burger" id="buttonX"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="register">Sign Up</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main-->
    <main class="container-fluid bg-img-masthead">
        <div class="container masthead">
            <div class="col-12">
                <div class="card card2 rounded shadow-sm">
                    <div class="card-body">
                        <h3>Create Your Account</h3>
                        <form action="register.php" method="post">
                        <?php include('errors.php'); ?>
                            <label for="Name">Full Name:</label>
                            <input type="text" name="name" id="" placeholder="Enter First Name and Last Name" required>

                            <label for="Email">Email:</label>
                            <input type="email" name="email" id="" placeholder="Enter Email" required>

                            <label for="Username">Username:</label>
                            <input type="text" name="username" id="" placeholder="Enter Username" required>

                            <label for="Password">Password:</label>
                            <input type="password" name="password_1" id="" placeholder="Enter Password" required>

                            <label for="Password">Repeat Password:</label>
                            <input type="password" name="password_2" id="" placeholder="Confirm Password" required>

                            <input type="checkbox" name="checkbox" id="" checked> I agree all statement in <span><a href="">Terms & Conditions</a></span>
                            <p class="btn-position">
                                <button type="submit" name="create_user" class="btn btn-login text-uppercase fw-normal">create my account</button>
                            </p>
                            <p>
                                Sign Up With Social Platforms
                            </p>
                            <div class="social">
                                <a href="">
                                    <img src="assets/png/004-google.png" alt="">
                                </a>
                                <a href="">
                                    <img src="assets/png/002-facebook.png" alt="">
                                </a>
                                <a href="">
                                    <img src="assets/png/001-twitter.png" alt="">
                                </a>
                                <a href="">
                                    <img src="assets/png/003-instagram.png" alt="">
                                </a>
                            </div>
                            <hr class="hr-tag">
                            <p>
                                Already have an account? <span><a href="login.php">Login now</a></span>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer class="container-fluid bgcolor">
        <div class="container py-5 text-center">
            <h6>Copyright &copy; 2022. All Rights are Reserved. Developed by <a href="https://joshuaabefe.github.io" target="_blank">joshuaabefe.github.io</a></h6>
        </div>
    </footer>
</body>
</html>