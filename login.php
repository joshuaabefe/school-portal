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
    <link rel="stylesheet" href="css/all.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Opti:wght@400;500;700&display=swap" rel="stylesheet">
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
            <a class="navbar-brand" href="#"><img src="assets/png/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" id="buttonX"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main-->
    <main class="container-fluid bg-img-masthead">
        <div class="container masthead">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="text-container">
                        <h2>Welcome to School Portal</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam sequi molestias ab autem illum excepturi repellat aperiam. Incidunt sint pariatur, tenetur quia minima, sapiente aut saepe, debitis repellendus reprehenderit dicta.</p>
                        <a class="btn btn-getstarted fw-normal" href="">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="card rounded shadow-sm">
                        <div class="card-body">
                            <h3>Login To Your Account</h3>
                            <form action="login.php" method="post">
                            <?php include('errors.php'); ?>
                                <input type="email" name="email" id="" placeholder="Email or Username" required>
                                <input type="password" name="password" id="" placeholder="Password" required>
                                <input type="checkbox" name="Check" id="" checked> Remember me
                                <p class="btn-position">
                                    <button type="submit" name="login_user" class="btn btn-login text-uppercase fw-normal">login</button>
                                </p>
                                <p>
                                    <a href="">Forgot Username/Password?</a>
                                </p>
                                <hr class="hr-tag">
                                <p>
                                    Don't have an account yet? <span><a href="register.php">Sign up now</a></span>
                                </p>
                            </form>
                        </div>
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