<?php
require "phpfiles/functions/functions.php";
$username = "Joost";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mojo Concerts</title>
    <link href="assets/style/stylesheet.css" rel="stylesheet">
    <link href="assets/style/slider.css" rel="stylesheet">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/slider.js"></script>
</head>
<body>
<?php
require "phpfiles/includes/nav.php";
require "phpfiles/includes/slider.php";
?>
<div class="center">
    <?php
    require "phpfiles/includes/articles.php";
    ?>
</div>
<div class="center">
    <?php
    require "phpfiles/includes/contact.php";
    ?>
</div>
<div class="center">
    <?php
        require "phpfiles/includes/over.php";
    ?>
</div>
<div class="center">
    <?php
    require "phpfiles/includes/footer.php";
    ?>
</div>
</body>
</html>