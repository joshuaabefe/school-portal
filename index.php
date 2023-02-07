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
            <a class="navbar-brand" href=""><img src="assets/png/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" id="buttonX"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Community</a></li>
                </ul>
                
                <div class="sm-sh">
                    <a class="login-link text-decoration-none" href="login.php">Login</a>
                    <a class="btn btn-getstarted fw-normal" href="register.php">Get Started</a>
                </div>
                <div class="sh">
                    <a class="btn btn-getstarted fw-normal" href="login.php">Sign Up/Log In</a>
                </div>
            </div>
        </div>
    </nav>


    <!-- Masthead-->
    <div class="container-fluid bg-img-masthead">
        <div class="container masthead">
            <div class="row flexWrap">
                <div class="col-lg-6 col-12">
                    <div class="text-container">
                        <h1>Ease your Search for Quality Education</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam sequi molestias ab autem illum excepturi repellat aperiam. Incidunt sint pariatur, tenetur quia minima, sapiente aut saepe, debitis repellendus reprehenderit dicta.</p>
                        <a class="btn btn-getstarted fw-normal" href="">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="image-container shadow-sm">
                        <img src="assets/png/homepageImage.c8338ac5.png" alt="homepageImage">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main-->
    <main class="container-fluid bg-color">
        <div class="container basic">
            <div class="row flexWrap">
                <div class="col-lg-6 col-12">
                    <div class="text-container px-4 px-lg-5">
                        <p class="text-uppercase">FOR STUDENTS</p>
                        <h2>Our Mission Is To Advance Humanity</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam sequi molestias ab autem illum excepturi repellat aperiam. Incidunt sint pariatur, tenetur quia minima, sapiente aut saepe, debitis repellendus reprehenderit dicta.</p>
                        <p class="learn-more">
                            <a href=""><span class="learn-text">Learn more</span><i class="fa fa-arrow-right"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="image-container px-4 px-lg-5">
                        <img src="assets/img/slide-1.svg" alt="homepageImage">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Main-->
    <main class="container-fluid">
        <div class="container basic">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="image-container px-4 px-lg-5">
                        <img src="assets/png/get_professional_2.e3c7499c.png" alt="homepageImage">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="text-container px-4 px-lg-5">
                        <p class="text-uppercase">FOR STUDENTS</p>
                        <h2>Get professional assistance in processing admission.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam sequi molestias ab autem illum excepturi repellat aperiam. Incidunt sint pariatur, tenetur quia minima, sapiente aut saepe, debitis repellendus reprehenderit dicta.</p>
                        <p class="learn-more">
                            <a href=""><span class="learn-text">Learn more</span><i class="fa fa-arrow-right"></i></a>
                        </p>
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