<?php
require_once("HeaderSub.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./src/FrontFiles/Frontend/lib/animate/animate.min.css" rel="stylesheet">
    <link href="./src/FrontFiles/Frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./src/FrontFiles/Frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="./src/FrontFiles/Frontend/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./src/FrontFiles/Frontend/css/style.css" rel="stylesheet">

    <style>
        .container,
        .container-sm,
        .container-md,
        .container-lg,
        .container-xl,
        .container-xxl {
            max-width: 100%;
        }
    </style>


    <!-- login Libraries -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./src/FrontFiles/loginFiles/fonts/icomoon/style.css">

    <link rel="stylesheet" href="./src/FrontFiles/loginFiles/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./src/FrontFiles/loginFiles/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="./src/FrontFiles/loginFiles/css/style.css">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    
                <?php
                    if (isset($_SESSION['Islogin'])) {
                        if ($_SESSION['Islogin'] == 1) {

                        echo '
                        <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="./HomeBreakfast.php" name="navy" class="nav-item nav-link">Breakfast</a>
                        <a href="./HomeDinner.php" name="navy" onclick="nav()" class="nav-item nav-link">Dinner</a>
                        <a href="./HomeLaunch.php" name="navy" onclick="nav()" class="nav-item nav-link">Launch</a>
                        <a href="./insertNewMail.php" name="navy" onclick="nav()" class="nav-item nav-link">Add Mail</a>
                    </div>
                        ';
                    }}
                    ?>

                    <?php
                    if (isset($_SESSION['Islogin'])) {
                    if ($_SESSION['Islogin'] !== 1) {
                        echo '<a href="./login.php"  class="btn btn-primary py-2 px-4">Login</a>';
                    }}
                    ?>

                    <?php
                    if (isset($_SESSION['Islogin'])) {
                    if ($_SESSION['Islogin'] == 1) {
                        echo '<a href="./logout.php" class="btn btn-primary py-2 px-4">logout</a>';
                    }}
                    ?>



                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->

        <script>
            function nav() {
                $el = document.getElementsByName("navy");
                el.className = "nav-item nav-link active";
            }
        </script>