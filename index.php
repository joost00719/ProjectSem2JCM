<?php
require "phpfiles/functions/database/funcDatabase.php";
require "phpfiles/functions/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mojo Concerts</title>
    <link href="assets/style/stylesheet.css" rel="stylesheet">
    <link href="assets/style/slider.css" rel="stylesheet">
    <script src="assets/js/slider.js"></script>
</head>
<body>
<?php

?>
    <?php
    $slider = sqlQuery("SELECT * FROM slider");
    for ($i = 0; $i < (count($slider) - 1); $i++) { ?>
    <div class="w3-content w3-display-container" id="displayContainer">
        <img class="mySlides" src="assets/images/<?= $slider[$i]["Picture"]; ?>" style="width:100%">
        <?php } ?>
        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle"
             style="width:100%">
            <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
            <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
            <?php for ($i = 1; $i < (count($slider)); $i++) { ?>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white"
                      onclick="currentDiv(<?= $i ?>)"></span>
            <?php } ?>
        </div>

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-white", "");
            }
            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " w3-white";
        }
    </script>

</div>


</body>
</html>
