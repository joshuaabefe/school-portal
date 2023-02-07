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
    <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>
    <div class="sidebar">
        <div class="close-btn">
            <i class="fas fa-times"></i>
        </div>
        <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px;">
            <a  href=""><img src="assets/png/logo.png" style="width: 65%;"  alt="logo"></a>
            <hr>
            <ul class="navbar-nav mb-auto">
                <li class="nav-item"><a class="nav-link active" href="">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="">Community</a></li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="assets/img/7074311_3551739.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong><?php echo $_SESSION['username']; ?></strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="login.php?logout='1'">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- section -->
    <section class="container-fluid bg-img-masthead main">
        <div class="container">
            <div class="section-title">
                <!-- notification message -->
                <?php if (isset($_SESSION['success'])) : ?>
                <p class="fist-bump">
                    <img src="assets/png/handshake.png" alt="">
                </p>
                <div class="error success" >
                    
                    <?php 
                        echo $_SESSION['success']; 
                        unset($_SESSION['success']);
                    ?>
                    <img src="assets/png/002-clapping.png" alt="">
                    
                </div>
                <?php endif ?>

                <!-- logged in user information -->
                <?php  if (isset($_SESSION['name'])) : ?>
                <p>
                    <?php 
                    // The timezone identifier
                    date_default_timezone_set('Africa/Lagos');

                    // 24-hour format of an hour without leading zeros (0 through 23)
                    $Hour = date('G');

                    if ( $Hour >= 00 && $Hour <= 11 ) {
                        echo "Good Morning,";
                    } else if ( $Hour >= 12 && $Hour <= 17 ) {
                        echo "Good Afternoon,";
                    } else if ( $Hour >= 18 || $Hour <= 23 ) {
                        echo "Good Evening,";
                    }
                    ?>
                    <strong class="name"><?php echo $_SESSION['name']; ?></strong>
                </p>
                <p class="date">
                    <?php 
                    echo date("dS, F Y , l");
                    ?>
                </p>
                <p>
                <?php endif ?>
            </div>
        </div>
    </section>
    
</body>
</html>