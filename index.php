<?php
require "assets/phpFiles/functions.php";
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
    <?php
    //  Text splitter, returned array.
    $ArticleCutted = stringCutter($articleHomeText);
    ?>
    <div class="container" style="padding:20px;">
        <div class="row">
            <div class="col-lg-12">
                        <!-- Titel van het artikel -->
                    <div class="col-xs-12"><h1> <?= $articleHomeH1; ?> </h1></div>
                <div class="col-md-6 col-sm-12">
                    <!-- Linker kant van artikel -->
                    <div class="col-xs-12" style="text-align: justify"><?= $ArticleCutted[0]; ?></div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <!-- Rechter kant van het artikel -->
                    <div class="col-xs-12" style="text-align: justify"><?= $ArticleCutted[1]; ?></div>
                </div>
            </div>
        </div>
        <!-- Footer -->

        <footer>
            <?php require 'assets/phpFiles/footer.php'; ?>
        </footer>
    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: <?= $sliderSpeed ?> //changes the speed
    })
    </script>
</body>
</html>