<?php
require "assets/phpFiles/functions.php";
if(!isset($_SESSION['LoggedIn'])) {
    $_SESSION['LoggedIn'] = false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Joost R, Cees M, Maverick D">

    <title><?= $title ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/half-slider.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Javascript for login -->
    <script src="js/loginSubmit.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <?php include 'assets/phpFiles/nav.php'; ?>
</nav>
<!-- Half Page Image Background Carousel Header -->
<header id="myCarousel" class="carousel slide">
    <?php require 'assets/phpFiles/header.php'; ?>
</header>
<!-- Page Content -->
<div class="container" style="padding:20px;">

    <?php
    if($_SESSION['LoggedIn'] == false){
    ?>
    <div id="loginContainer">
        <!-- Inlog formulier -->
        <form id="loginForm" method="post">
            <h4>
                Login
            </h4>
            <hr>
            Username: <br/>
            <input type="text" name="inputUsername" class="loginInputValue" id="inputUsername"> <br/>
            Password: <br/>
            <input type="password" name="inputPassword" class="loginInputValue" id="inputPassword"> <br/>
            <input type="submit" class="loginSubmit" value="Inloggen" onsubmit="return false" ">
        </form>
        <?php
        if (isset($_POST['inputUsername']) && isset($_POST['inputPassword'])) {
            $inputUsername = $_POST['inputUsername'];
            $inputPassword = $_POST['inputPassword'];
            echo login($inputUsername, $inputPassword);
        }

        } else {
            ?>
            <div id="userSettings">
                <h3>
                    Welkom op het gebruikerspaneel, <?= $loggedInUser; ?>
                </h3>





            </div>
            <?php
        }
        ?>
</div>
<!-- Footer -->
<footer>
    <?php require 'assets/phpFiles/footer.php'; ?>
</footer>
</div>
<!-- /.container -->


<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: <?= $sliderSpeed ?> //changes the speed
    })
</script>
</body>
</html>

